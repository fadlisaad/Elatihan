<?php
/****************************************************************************
* data/accions/permisos.inc.php
*
* Realiza la visualizaci�n o acci�n de cambiar los permisos a un fichero
* o directorio
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

defined('OK') && defined('ACCION') or die();

include ($PFN_paths['plantillas'].'cab.inc.php');
include ($PFN_paths['web'].'opcions.inc.php');

$PFN_tempo->rexistra('precodigo');

if ($PFN_vars->post('executa')) {
	if (!empty($cal) && !empty($dir)) {
		$perimisos = 0;

		foreach (array('p400','p200','p100','p040','p020','p010','p004','p002','p001') as $v) {
			$permisos += $PFN_vars->post($v);
		}

		$PFN_accions->permisos($arquivo, $permisos);
		$estado = $PFN_accions->estado_num('permisos');
		$estado_accion = $PFN_conf->t('estado.permisos',intval($estado));
	}

	include ($PFN_paths['web'].'navega.inc.php');
} else {
	$actuales = fileperms($arquivo);

	include ($PFN_paths['plantillas'].'posicion.inc.php');
	include ($PFN_paths['plantillas'].'info_cab.inc.php');
	include ($PFN_paths['plantillas'].'permisos.inc.php');
}

$PFN_tempo->rexistra('postcodigo');

include ($PFN_paths['plantillas'].'pe.inc.php');
?>
