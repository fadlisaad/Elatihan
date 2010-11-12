<?php
/****************************************************************************
* menu.inc.php
*
* Carga lo necesario para la visualizaci�n del men� de selecci�n de Ra�z
*

PHPfileNavigator versi�n 2.2.0

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

defined('OK') or die();

unset($sPFN['raiz']);

$PFN_vars->session(array('sPFN','raiz'),'');

$PFN_usuarios->init('menu_raices', $sPFN['usuario']['id']);

if ($PFN_usuarios->filas() == 1) {
	$sPFN['raiz']['unica'] = true;	

	session_register('sPFN');
	$PFN_vars->session('sPFN', $sPFN);

	session_write_close();

	Header ('Location: navega.php?id='.$PFN_usuarios->get('id').'&'.session_name().'='.session_id());
	exit;
} else {
	session_register('sPFN');
	session_write_close();
}
?>
