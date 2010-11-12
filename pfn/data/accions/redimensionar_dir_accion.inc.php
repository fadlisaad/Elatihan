<?php
/****************************************************************************
* data/accions/redimensionar_dir_accion.inc.php
*
* Crea una copia reducida para cada im�gen de una carpeta
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

$txt = '';
$mais = 0;
$valen = array();
$sobreescribir = $PFN_vars->get('sobreescribir');
$previsualizar = $PFN_vars->get('previsualizar');
$destino = $PFN_conf->g('raiz','path').$PFN_niveles->path_correcto($dir);
$imx_path = $PFN_niveles->path_correcto($destino.'/'.$cal);
$pos = intval($PFN_vars->get('pos'));

if ($PFN_vars->get('executa') && !empty($cal) && ($pos > -1)) {
	@set_time_limit($PFN_conf->g('tempo_maximo'));
	@ini_set('memory_limit', $PFN_conf->g('memoria_maxima'));

	include_once ($PFN_paths['include']."class_imaxes.php");
	include_once ($PFN_paths['include']."class_arquivos.php");

	$PFN_imaxes = new PFN_Imaxes($PFN_conf);
	$PFN_arquivos = new PFN_Arquivos($PFN_conf);

	$PFN_conf->p(1500,'paxinar');
	$contido = $PFN_niveles->get_contido($imx_path,'nome','asc',true);

	foreach ($contido['arq']['nome'] as $v) {
		if ($PFN_imaxes->e_imaxe($imx_path.'/'.$v)) {
			$valen[] = $v;
		}
	}

	$imaxe = $imx_path.'/'.$valen[$pos];
	$url_imaxe = $dir.'/'.$cal.'/'.$valen[$pos];

	if (empty($imaxe)) {
		$txt .= $PFN_conf->t('estado.redimensionar_dir',2).' <strong>'.$url_imaxe.'</strong><br />';
	}

	$txt .= $previsualizar?'<span class="mini">':('('.($pos+1).'/'.count($valen).') ');

	if ($sobreescribir || !is_file($PFN_imaxes->nome_pequena($imaxe))) {
		$PFN_imaxes->reducir($imaxe);

		if ($previsualizar) {
			$txt .= '<img src="'.$PFN_imaxes->sello($url_imaxe,false).'" />';
		} else {
			$txt .= $PFN_conf->t('estado.redimensionar_dir',1).'<strong>'.$url_imaxe.'</strong><br />';
		}
	} else {
		if ($previsualizar) {
			$txt .= '<img src="'.$PFN_imaxes->sello($url_imaxe,false).'" />';
		} else {
			$txt .= $PFN_conf->t('estado.redimensionar_dir',4).'<strong>'.$url_imaxe.'</strong><br />';
		}
	}

	$txt .= $previsualizar?('<br />'.($pos+1).'/'.count($valen).'</span>'):'';

	if (!empty($valen[$pos+1])) {
		$mais = $pos+1;
	}
} else {
	$txt .= $PFN_conf->t('estado.redimensionar_dir',3).'<br />';
}

if ($previsualizar && ($pos % 4) == 0) {
	$txt .= '<br class="nada" />';
}

if ($mais > 0) {
	$txt .= '|new ajax('.$mais.', {update: $("resultado_ajax")});';
} else {
	$txt .= '|activa_botons();';
}

echo $txt;

exit;
?>
