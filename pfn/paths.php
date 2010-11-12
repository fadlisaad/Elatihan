<?php
/****************************************************************************
* paths.php
*
* Carga las rutas necesarias para la realizaci�n de los includes y requires
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

define('OK', true);

error_reporting(E_ERROR | E_WARNING | E_PARSE);

$PFN_version = '233';
$borra_cache = true;
$b = dirname(__FILE__);

$PFN_paths = array(
	'web' => $b.'/',
	'tmp' => $b.'/data/servidor/tmp/',
	'xestion' => $b.'/xestion/',
	'data' => $b.'/data/',
	'conf' => $b.'/data/conf/',
	'plantillas' => $b.'/data/plantillas/',
	'logs' => $b.'/data/servidor/logs/',
	'idiomas' => $b.'/data/idiomas/',
	'include' => $b.'/data/include/',
	'accions' => $b.'/data/accions/',
	'info' => $b.'/data/servidor/info/',
	'extra' => $b.'/data/servidor/extra/',
	'servidor' => $b.'/data/servidor/'
);
?>
