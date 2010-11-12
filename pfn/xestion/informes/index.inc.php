<?php
/****************************************************************************
* xestion/informes/index.inc.php
*
* Prepara los datos para ser mostrador en el informe
*

PHPfileNavigator versi�n 2.0.0

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

defined('OK') && defined('XESTION') or die();

$executa = $PFN_vars->post('executa').$PFN_vars->get('executa');
$erros = array();
$log = array();
$lineas = 0;
$txt = '';
$i = 1;

if ($executa == 'mysql') {
	include_once ($PFN_paths['xestion'].'informes/mysql.inc.php');
} elseif ($executa == 'accions') {
	include_once ($PFN_paths['xestion'].'informes/accions.inc.php');
} elseif ($executa == 'accesos') {
	include_once ($PFN_paths['xestion'].'informes/accesos.inc.php');
} elseif ($executa == 'uso_disco') {
	include_once ($PFN_paths['xestion'].'informes/uso_disco.inc.php');
} elseif ($executa == 'ancho_banda') {
	include_once ($PFN_paths['xestion'].'informes/ancho_banda.inc.php');
}
?>
