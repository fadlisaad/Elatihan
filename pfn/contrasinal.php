<?php
/****************************************************************************
* contrasinal.php
*
* Comprueba que el usuario puede recuperar su contrase�a y env�a un correo
* con ella
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

$sPFN = '';

session_start();
session_register('sPFN');
session_unset('sPFN');
session_write_close();

include ('paths.php');
include_once ($PFN_paths['include'].'class_tempo.php');
include_once ($PFN_paths['include'].'funcions.php');
include_once ($PFN_paths['include'].'class_conf.php');
include_once ($PFN_paths['include'].'class_vars.php');

$PFN_conf->textos('web');
$PFN_tempo->rexistra('precodigo');

$ok = false;

if (($PFN_vars->post('recuperar_usuario') != '')
&& ($PFN_vars->post('recuperar_email') != '')) {
	include_once ($PFN_paths['include'].'mysql.php');
	include_once ($PFN_paths['include'].'clases.php');
	include_once ($PFN_paths['include'].'class_usuarios.php');

	$PFN_usuarios->vars($PFN_vars);

	$ok = $PFN_usuarios->nova_contrasinal();

	if ($ok === 1) {
		$txt_erro = $PFN_conf->t('avisos_novo_contrasinal', 1);
		$PFN_usuarios->contrasinal_temporal();
	} else {
		$txt_erro = $PFN_conf->t('avisos_novo_contrasinal', $ok);
	}
} else {
	$txt_erro = $PFN_conf->t('txt_novo_contrasinal');
}

$PFN_tempo->rexistra('preplantillas');

include ($PFN_paths['plantillas'].'cab.inc.php');
include ($PFN_paths['plantillas'].'contrasinal.inc.php');
include ($PFN_paths['plantillas'].'pe.inc.php');
?>
