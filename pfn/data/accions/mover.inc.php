<?php
/****************************************************************************
* data/accions/mover.inc.php
*
* Realiza la visualizaci�n o acci�n de mover un fichero o directorio
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

$erro = false;

if ($PFN_vars->post('executa')) {
	if (!empty($cal) && !empty($dir)) {
		include_once ($PFN_paths['include'].'class_extra.php');
		include_once ($PFN_paths['include'].'class_inc.php');
		include_once ($PFN_paths['include'].'class_indexador.php');

		$PFN_indexador = new PFN_Indexador($PFN_conf);
		$PFN_inc = new PFN_INC($PFN_conf);
		$PFN_extra->accions($PFN_accions);

		$orixinal = $arquivo;
		$destino = $PFN_conf->g('raiz','path').$PFN_accions->path_correcto($PFN_vars->post('escollido').'/')
			.'/'.$cal;

		if (strstr($destino, $orixinal)) {
			$estado_accion = $PFN_conf->t('estado.mover_dir',7);
			$erro = true;
		}

		if (!$erro && $tipo == 'dir') {
			$PFN_accions->mover($orixinal, $destino);
			$estado = $PFN_accions->estado_num('mover_dir');
			$estado_accion = $PFN_conf->t('estado.mover_dir',intval($estado));

			if ($PFN_accions->estado('mover_dir')) {
				if (is_dir(PFN_get_path_extra($orixinal))) {
					$PFN_extra->mover($orixinal, $destino, true);
				}

				$i_destino = $PFN_accions->path_correcto($PFN_vars->post('escollido').'/');
				$PFN_indexador->mover("$dir/", "$i_destino/", "$cal/");
			}
		} elseif (!$erro) {
			$PFN_accions->mover($orixinal,$destino);
			$estado = $PFN_accions->estado_num('mover_arq');
			$estado_accion = $PFN_conf->t('estado.mover_arq',intval($estado));

			if ($PFN_accions->estado('mover_arq')) {
				if (is_file($PFN_inc->nome_inc($orixinal))) {
					$PFN_extra->mover($PFN_inc->nome_inc($orixinal), $PFN_inc->nome_inc($destino), false);
				}

				if (is_file($PFN_imaxes->nome_pequena($orixinal))) {
					$PFN_extra->mover($PFN_imaxes->nome_pequena($orixinal), $PFN_imaxes->nome_pequena($destino), false);
				}

				$i_destino = $PFN_accions->path_correcto($PFN_vars->post('escollido').'/');
				$PFN_indexador->mover("$dir/", "$i_destino/", $cal);
			}
		}
	}

	include ($PFN_paths['web'].'navega.inc.php');
} else {
	if (file_exists($arquivo)) {
		include_once ($PFN_paths['include'].'class_arbore.php');
		$PFN_arbore = new PFN_Arbore($PFN_conf);

		$PFN_arbore->imaxes($PFN_imaxes);
		$PFN_arbore->pon_radio('escollido');
		$PFN_arbore->pon_enlaces(false);

		if ($PFN_accions->e_dir($arquivo)) {
			$contido = $PFN_accions->get_contido($arquivo);
			$PFN_arbore->pon_copia($arquivo);
	
			if (count($contido['dir']['nome']) || count($contido['arq']['nome'])) {
				$adv = $PFN_conf->t('estado.mover_dir',2);
			} else {
				$adv = $PFN_conf->t('estado.mover_dir',3);
			}
		} else {
			$adv = $PFN_conf->t('estado.mover_arq',2);
		}

		$PFN_arbore->carga_arbore($PFN_conf->g('raiz','path'), './', false);

		include ($PFN_paths['plantillas'].'posicion.inc.php');
		include ($PFN_paths['plantillas'].'info_cab.inc.php');
		include ($PFN_paths['plantillas'].'mover.inc.php');
	} else {
		include ($PFN_paths['web'].'navega.inc.php');
	}
}

$PFN_tempo->rexistra('postcodigo');

include ($PFN_paths['plantillas'].'pe.inc.php');
?>
