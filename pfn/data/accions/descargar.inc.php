<?php
/****************************************************************************
* data/accions/descargar.inc.php
*
* Realiza la acci�n de descarga de un fichero
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

PFN_quita_url_SERVER('zlib');

include_once ($PFN_paths['include'].'class_arquivos.php');
include_once ($PFN_paths['include'].'class_inc.php');

$PFN_arquivos = new PFN_Arquivos($PFN_conf);
$PFN_inc = new PFN_INC($PFN_conf);

$PFN_inc->arquivos($PFN_arquivos);
$PFN_inc->carga_datos($arquivo);
$PFN_accions->arquivos($PFN_arquivos);

if ($PFN_vars->get('zlib')
&& ($PFN_conf->g('zlib') == true)
&& $PFN_conf->g('permisos', 'comprimir')) {
	@set_time_limit($PFN_conf->g('tempo_maximo'));
	@ini_set('memory_limit', $PFN_conf->g('memoria_maxima'));

	include_once ($PFN_paths['include'].'class_easyzip.php');

	$EasyZIP->comeza($arquivo);
	$contido = &$EasyZIP->zipFile();
	$tamano = strlen($contido);

	$estado = $PFN_accions->log_ancho_banda($tamano);

	if ($estado === true) {
		$PFN_inc->mais_datos('descargado', ($PFN_inc->valor('descargado') + 1));
		$PFN_inc->crea_inc($arquivo.(($tipo == 'dir')?'/':''), $tipo);

		header('Pragma: private');
		header('Expires: 0');
		header('Cache-control: private, must-revalidate');
		header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
		header('Content-Type: application/force-download; charset='.$PFN_conf->g('charset'));
		header('Content-Transfer-Encoding: binary');
		header('Content-Disposition: attachment; filename="'.str_replace(array(' ','"'),'_',$cal.'.zip').'"');
		header('Content-Length: '.$tamano);

		echo $contido;
		exit;
	} elseif ($estado === -1) {
		$erro = true;
		$estado_accion = $PFN_conf->t(array('estado.descargar', 3), $PFN_paths['info']);
	} else {
		$erro = true;
		$estado_accion = $PFN_conf->t('estado.descargar', 2);
	}

	unset($contido);
} elseif (is_file($arquivo)) {
	@set_time_limit($PFN_conf->g('tempo_maximo'));
	@ini_set('memory_limit', $PFN_conf->g('memoria_maxima'));

	$tamano = PFN_espacio_disco($arquivo, true);

	$estado = $PFN_accions->log_ancho_banda($tamano);

	if ($estado === true) {
		$PFN_inc->mais_datos('descargado', ($PFN_inc->valor('descargado') + 1));
		$PFN_inc->crea_inc($arquivo, 'arq');

		$modo = ($PFN_vars->get('modo') == '')?$PFN_conf->g('descarga_defecto'):$PFN_vars->get('modo');

		if ($modo == 'enlace') {
			header('Location: '.$enlace_abs);
			exit;
		}

		$mime = ($PFN_imaxes->mime($cal) == '')?$PFN_imaxes->mime(''):$PFN_imaxes->mime($cal);

		header('Pragma: private');
		header('Expires: 0');
		header('Cache-control: private, must-revalidate');
		header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
		header('Content-Type: '.$mime.'; charset='.$PFN_conf->g('charset'));

		if ($modo == 'descargar') {
			header('Content-Type: application/force-download');
			header('Content-Transfer-Encoding: binary');
			header('Content-Disposition: attachment; filename="'.str_replace(array(' ','"'),'_',$ucal).'"');
		} else {
			header('Content-Disposition: inline; filename="'.str_replace(array(' ','"'),'_',$ucal).'"');
		}

		header('Content-Length: '.$tamano);

		$PFN_arquivos->get_contido($arquivo, true);
		exit;
	} elseif ($estado === -1) {
		$erro = true;
		$estado_accion = $PFN_conf->t('estado.descargar', 3);
	} else {
		$erro = true;
		$estado_accion = $PFN_conf->t('estado.descargar', 2);
	}
} else {
	$erro = true;
}

if ($erro) {
	$PFN_tempo->rexistra('preplantillas');

	include ($PFN_paths['plantillas'].'cab.inc.php');
	include ($PFN_paths['web'].'opcions.inc.php');

	$PFN_tempo->rexistra('precodigo');

	include ($PFN_paths['web'].'navega.inc.php');

	$PFN_tempo->rexistra('postcodigo');

	include ($PFN_paths['plantillas'].'pe.inc.php');
}
?>
