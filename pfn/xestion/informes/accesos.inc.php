<?php
/****************************************************************************
* xestion/informes/acsesos.inc.php
*
* Prepara los datos para mostrar el informe sobre accesos
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

$ae_buscar = trim($PFN_vars->post('ae_buscar'));
$ae_lineas = intval($PFN_vars->post('ae_lineas'));
$ae_lineas = ($ae_lineas < 1 || $ae_lineas > 500)?50:$ae_lineas;
$ae_amosar = is_array($PFN_vars->post('ae_amosar'))?$PFN_vars->post('ae_amosar'):array();
$ae_entradas = in_array('entradas', $ae_amosar);
$ae_saidas = in_array('saidas', $ae_amosar);
$ae_erros = in_array('erros', $ae_amosar);
$ae_sen_datos = in_array('sen_datos', $ae_amosar);

if (!$ae_entradas && !$ae_saidas && !$ae_erros && !$ae_sen_datos) {
	$ae_entradas = $ae_saidas = $ae_erros = $ae_sen_datos = true;
}

$w = $ae_entradas?'WHERE ((donde = "login" AND estado = 1)':'';
$w .= $ae_saidas?(($w?' OR':'WHERE (').' donde = "sair"'):'';
$w .= $ae_erros?(($w?' OR':'WHERE (').' (donde = "login" AND estado = 0)'):'';
$w .= $ae_sen_datos?(($w?' OR':'WHERE (').' ((donde = "vacios" OR donde = "session") AND estado = 0)'):'';
$w .= $ae_buscar?(($w?') AND':'WHERE').' login LIKE "%'.addslashes($ae_buscar).'%"'):($w?')':'');
$w .= ' ORDER BY data DESC';
$w .= ' LIMIT 0,'.intval($ae_lineas).';';

$txt = '<table class="tabla_informes" summary="">'
	.'<tr><th>'.$PFN_conf->t('Xcol_data').'</th>'
	.'<th>'.$PFN_conf->t('Xcol_login').'</th>'
	.'<th>'.$PFN_conf->t('Xcol_ip').'</th>'
	.'<th>'.$PFN_conf->t('Xcol_estado').'</th>'
	.'<th>'.$PFN_conf->t('Xcol_donde').'</th>'
	.'<th>'.$PFN_conf->t('Xcol_sesion').'</th></tr>';

for ($PFN_usuarios->informe($w); $PFN_usuarios->mais(); $PFN_usuarios->seguinte()) {
	if ($PFN_usuarios->get('estado') == '1') {
		$class = 'tr_ok';
	} else {
		$class = 'tr_ko';
	}

	$txt .= '<tr class="'.$class.'"><td>'.date("Y/m/d H:i:s", $PFN_usuarios->get('data')).'</td>'
		.'<td>'.$PFN_usuarios->get('login').'</td>'
		.'<td>'.$PFN_usuarios->get('ip').'</td>'
		.'<td>'.$PFN_usuarios->get('estado').'</td>'
		.'<td>'.$PFN_usuarios->get('donde').'</td>'
		.'<td>'.$PFN_usuarios->get('session').'</td></tr>';
}

$txt .= '</table>';
?>
