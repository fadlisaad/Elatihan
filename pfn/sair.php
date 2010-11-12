<?php
/****************************************************************************
* sair.php
*
* Cierra sesi�n y redirige hacia el destino especificado
*

PHPfileNavigator versi�n 2.3.2

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
include_once ($PFN_paths['include'].'class_tempo.php');
include_once ($PFN_paths['include'].'borra_cache.php');
include_once ($PFN_paths['include'].'funcions.php');
include_once ($PFN_paths['include'].'class_conf.php');
include_once ($PFN_paths['include'].'class_vars.php');
include_once ($PFN_paths['include'].'mysql.php');
include_once ($PFN_paths['include'].'clases.php');
include_once ($PFN_paths['include'].'class_sesion.php');
include_once ($PFN_paths['include'].'class_usuarios.php');
include_once ($PFN_paths['include'].'usuarios.php');

$PFN_conf->carga();

if (!$PFN_conf->g('manter_sesion')) {
	$PFN_sesion->encriptar(true,false);
}

$PFN_usuarios->garda_rexistro('sair',1);

$url = $PFN_conf->g('saida');

$sPFN = '';

session_register('sPFN');
session_unregister('sPFN');

if ($PFN_conf->g('manter_sesion')) {
	$url .= (strstr($url, '?')?'&':'?').session_name().'='.session_id();
} else {
	session_unset();
	session_destroy();
}

session_write_close();

Header('Location: '.$url);
exit;
?>
