<?php
/****************************************************************************
* xestion/varios/logs.inc.php
*
* Elimina los ficheros de registros seleccionados
*

PHPfileNavigator versi�n 2.1.0

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

$ok = false;
$log_mysql = $PFN_vars->post('log_mysql');
$logs_accions = $PFN_vars->post('logs_accions');

if ($log_mysql && is_file($PFN_paths['logs'].$PFN_conf->g('logs','mysql'))) {
	@unlink($PFN_paths['logs'].$PFN_conf->g('logs','mysql'));
	$ok = true;
}

if ($logs_accions) {
	foreach ($logs_accions as $v) {
		if (is_file($PFN_paths['info'].'raiz'.intval($v).'/'.$PFN_conf->g('logs','accions'))) {
			@unlink($PFN_paths['info'].'raiz'.intval($v).'/'.$PFN_conf->g('logs','accions'));
			$ok = true;
		}
	}
}
?>
