<?php
/****************************************************************************
* data/accions/buscador.inc.php
*
* Realiza la visualizaci�n da accion de buscar
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

defined('OK') && defined('ACCION') or die();

$PFN_tempo->rexistra('preplantillas');

include ($PFN_paths['plantillas'].'cab.inc.php');
include ($PFN_paths['web'].'opcions.inc.php');

$PFN_tempo->rexistra('precodigo');

include ($PFN_paths['plantillas'].'posicion.inc.php');

if ($PFN_vars->post('executa')
	&& $PFN_vars->post('palabra_buscar') != ''
	&& is_array($PFN_vars->post('campos_buscar'))
) {
	include_once ($PFN_paths['include'].'class_indexador.php');
	$PFN_indexador = new PFN_Indexador($PFN_conf);

	$cada = '';
	$resultados = $PFN_indexador->buscar(
		"$dir/",
		$PFN_vars->post('palabra_buscar'),
		$PFN_vars->post('campos_buscar'),
		$PFN_vars->post('donde_buscar')
	);

	if (count($resultados)) {
		foreach ($resultados as $k => $v) {
			$cada = $PFN_conf->g('raiz','path').$PFN_accions->path_correcto($v['directorio'])
				.'/'.$v['arquivo'];

			if (!file_exists($cada)) {
				$PFN_indexador->eliminar($PFN_accions->path_correcto($v['directorio']).'/', $v['arquivo']);
				unset($resultados[$k]);
			}
		}

		include_once ($PFN_paths['include'].'class_inc.php');

		$PFN_inc = new PFN_INC($PFN_conf);
		$PFN_arquivos->niveles($PFN_niveles);
	}

	include ($PFN_paths['plantillas'].'buscador_formulario.inc.php');
	include ($PFN_paths['plantillas'].'buscador_resultados.inc.php');
} else {
	include ($PFN_paths['plantillas'].'buscador_formulario.inc.php');
}

$PFN_tempo->rexistra('postcodigo');

include ($PFN_paths['plantillas'].'pe.inc.php');
?>
