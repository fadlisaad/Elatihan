<?php
/****************************************************************************
* data/accions/crear_dir.inc.php
*
* Realiza la visualizaci�n o acci�n de crear un directorio
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

defined('OK') && defined('ACCION') or die();

$PFN_tempo->rexistra('preplantillas');

include ($PFN_paths['plantillas'].'cab.inc.php');
include ($PFN_paths['web'].'opcions.inc.php');

$PFN_tempo->rexistra('precodigo');

if ($PFN_vars->post('executa') && $PFN_vars->post('nome_directorio') != '') {
	$donde = $PFN_conf->g('raiz','path').$PFN_accions->path_correcto($dir.'/');
	$cal = $PFN_accions->nome_correcto($PFN_vars->post('nome_directorio'));
	
	$PFN_accions->crear_dir($donde, $cal);
	$estado = $PFN_accions->estado_num('crear_dir');
	$estado_accion = $PFN_conf->t('estado.crear_dir',intval($estado));
	
	if ($PFN_accions->estado('crear_dir')) {
		if ($PFN_conf->g('inc','estado')) {
			include_once ($PFN_paths['include'].'class_inc.php');

			$PFN_inc = new PFN_INC($PFN_conf);

			$PFN_inc->arquivos($PFN_arquivos);
			$arq_inc = $PFN_inc->crea_inc($donde.'/'.$cal.'/','dir');
		}

		if ($PFN_conf->g('inc','indexar')) {
			include_once ($PFN_paths['include'].'class_indexador.php');

			$PFN_indexador = new PFN_Indexador($PFN_conf);
			$PFN_indexador->alta_modificacion($dir.'/', $cal.'/', $arq_inc);
		}
	}

	include ($PFN_paths['web'].'navega.inc.php');
} else {
	include_once ($PFN_paths['include'].'class_inc.php');

	$PFN_inc = new PFN_INC($PFN_conf);

	include ($PFN_paths['plantillas'].'posicion.inc.php');
	include ($PFN_paths['plantillas'].'crear_dir.inc.php');
}

$PFN_tempo->rexistra('postcodigo');

include ($PFN_paths['plantillas'].'pe.inc.php');
?>
