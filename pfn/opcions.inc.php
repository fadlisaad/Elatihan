<?php
/****************************************************************************
* opcions.inc.php
*
* Carga lo necesario para la visualizaci�n del men� superior de opciones
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

$menu_opc = array();
$menu_opc['escoller_raiz'] = 'menu.php?'.PFN_quita_url('dir',false);
$menu_opc['actualizar'] = PFN_get_url();

if ($PFN_conf->g('usuario','admin') == true) {
	$menu_opc['zona_admin'] = 'xestion/index.php?'.PFN_get_url(false);
} if ($PFN_conf->g('permisos','buscador')) {
	$menu_opc['buscador'] = 'accion.php?'.PFN_cambia_url(array('dir','accion'),array($dir,'buscador'),false);;
} if ($PFN_conf->g('permisos','axuda')) {
	$menu_opc['axuda'] = 'axuda.php?'.PFN_get_url(false);
} if ($PFN_conf->g('permisos','crear_dir')) {
	$menu_opc['crear_dir'] = 'accion.php?'.PFN_cambia_url(array('dir','accion'),array($dir,'crear_dir'),false);
} if ($PFN_conf->g('permisos','novo_arq')) {
	$menu_opc['novo_arq'] = 'accion.php?'.PFN_cambia_url(array('dir','accion'),array($dir,'novo_arq'),false);
} if ($PFN_conf->g('permisos','subir_arq')) {
	$menu_opc['subir_arq'] = 'accion.php?'.PFN_cambia_url(array('dir','accion'),array($dir,'subir_arq'),false);
} if ($PFN_conf->g('permisos','subir_url')) {
	$menu_opc['subir_url'] = 'accion.php?'.PFN_cambia_url(array('dir','accion'),array($dir,'subir_url'),false);
} if ($PFN_conf->g('permisos','ver_imaxes')) {
	$menu_opc['ver_imaxes'] = PFN_cambia_url(array('dir','ver_imaxes','completo'),array($dir,($ver_imaxes?'':'true'),$PFN_vars->get('completo')));
} if ($PFN_conf->g('usuario','cambiar_datos')) {
	$menu_opc['preferencias'] = 'preferencias.php?'.PFN_get_url(false);
} if ($PFN_conf->g('permisos','arbore')) {
	$menu_opc['arbore'] = 'arbore.php?'.PFN_get_url(false);
} if ($PFN_conf->g('permisos','sair')) {
	$menu_opc['sair'] = 'sair.php?'.PFN_get_url(false);
}

include ($PFN_paths['plantillas'].'opcions.inc.php');
?>
