<?php
/****************************************************************************
* comprobar.php
*
* Control de login que redirije para el men� o vuelve al index
*

PHPfileNavigator versi�n 2.3.0

Copyright (C) 2004-2005 Lito <lito@eordes.com>

http://phpfilenavigator.litoweb.net/

Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los
t�rminos de la Licencia P�blica General de GNU seg�n es publicada por la Free
Software Foundation, bien de la versi�n 2 de dicha Licencia o bien (seg�n su
elecci�n) de cualquier versi�n posterior. 

Este programa se distribuye con la esperanza de que sea �til, pero SIN NINGUNA
GARANT�A, incluso sin la garant�a MERCANTIL impl�cita o sin garantizar la
CONVENIENCIA PARA UN PROP�SITO PARTICULAR. V�ase la Licencia P�blica General de
GNU para m�s detalles. 

Deber�a haber recibido una copia de la Licencia P�blica General junto con este
programa. Si no ha sido as�, escriba a la Free Software Foundation, Inc., en
675 Mass Ave, Cambridge, MA 02139, EEUU. 
*******************************************************************************/

include ('paths.php');
include_once ($PFN_paths['include'].'borra_cache.php');
include_once ($PFN_paths['include'].'funcions.php');
include_once ($PFN_paths['include'].'class_conf.php');
include_once ($PFN_paths['include'].'class_vars.php');
include_once ($PFN_paths['include'].'mysql.php');
include_once ($PFN_paths['include'].'clases.php');
include_once ($PFN_paths['include'].'class_usuarios.php');
include_once ($PFN_paths['include'].'class_sesion.php');

$PFN_sesion->encriptar(false,true);

$PFN_conf->inicial('login');
$PFN_usuarios->vars($PFN_vars);

$ok = true;
$sPFN = array();
$usuario = $PFN_usuarios->login('usuario');
$contrasinal = $PFN_usuarios->login('contrasinal');

$PFN_usuarios->init('intentos');

if ($PFN_usuarios->get('intentos') >= $PFN_usuarios->intentos_errados) {
	$ok = false;
}

if ($ok && $PFN_usuarios->init('login',$usuario,$contrasinal)) {
	$sPFN['usuario'] = array(
		'id' => $PFN_usuarios->get('id'),
		'usuario' => $usuario,
		'contrasinal' => $contrasinal,
		'admin' => $PFN_usuarios->get('admin'),
		'id_grupo' => $PFN_usuarios->get('id_grupo'),
		'conf_defecto' => $PFN_usuarios->get('conf_defecto'),
		'mantemento' => $PFN_usuarios->get('mantemento'),
		'descargas_maximo' => $PFN_usuarios->get('descargas_maximo'),
		'cambiar_datos' => $PFN_usuarios->get('cambiar_datos'),
	);

	if (!$PFN_usuarios->sesion_iniciada) {
		session_start();
	}

	session_register('sPFN');
	$PFN_vars->session('sPFN', $sPFN);

	$PFN_sesion->escribir(session_id(), ('sPFN|'.serialize($sPFN)));

	session_write_close();

	$PFN_usuarios->garda_rexistro('login',1);

	Header('Location: menu.php?'.session_name().'='.session_id());
	exit;
} else {
	$PFN_usuarios->usuario = $PFN_usuarios->corrixe($usuario);
	$PFN_usuarios->garda_rexistro('login',0);

	$url = $PFN_vars->server('HTTP_REFERER');

	if (empty($url)) {
		$url = 'index.php?erro=1';
	} elseif (!strstr($url, 'erro=1')) {
		$url .= (strstr($url, '?')?'&':'?').'erro=1';
	}
	
	Header('Location: '.$url);
	exit;
}
?>
