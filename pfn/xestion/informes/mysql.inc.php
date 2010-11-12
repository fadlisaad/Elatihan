<?php
/****************************************************************************
* xestion/informes/mysql.inc.php
*
* Prepara los datos para mostrar el informe de errores de MySQL
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

$my_buscar = trim($PFN_vars->post('my_buscar'));
$my_lineas = intval($PFN_vars->post('my_lineas'));
$my_lineas = ($my_lineas < 1 || $my_lineas > 500)?50:$my_lineas;

if ($PFN_conf->g('logs','mysql') && is_file($PFN_paths['logs'].$PFN_conf->g('logs','mysql'))) {
	include_once ($PFN_paths['logs'].$PFN_conf->g('logs','mysql'));

	if (count($log)) {
		rsort($log);

		$busca = empty($my_buscar)?array():explode(' ', $my_buscar);

		foreach ($log as $k => $v) {
			$borrar = false;

			foreach ($busca as $v2) {
				$borrar = !stristr($v, $v2);

				if ($borrar) {
					break;
				}
			}

			if ($borrar) {
				unset($log[$k]);
				continue;
			}

			preg_match_all("/^\[([^\]]+)\] \[([^\]]+)\] \[([^\]]+)\] \[([^\]]+)\] \[([^\]]+)\]$/", $v, $partes);

			$txt .= '<table class="tabla_informes" summary="">'
				.'<tr><th style="text-align: right;">'.$PFN_conf->t('Xcol_data').':&nbsp;</th>'
					.'<td>'.$partes[1][0].'</td></tr>'
				.'<tr><th style="text-align: right;">'.$PFN_conf->t('Xcol_arquivo').':&nbsp;</th>'
					.'<td>'.(substr($partes[2][0], strlen($PFN_paths['web']))).'</td></tr>'
				.'<tr><th style="text-align: right;">'.$PFN_conf->t('Xcol_linha').':&nbsp;</th>'
					.'<td>'.$partes[3][0].'</td></tr>'
				.'<tr><th style="text-align: right;">'.$PFN_conf->t('Xcol_consulta').':&nbsp;</th>'
					.'<td>'.stripslashes($partes[4][0]).'</td></tr>'
				.'<tr><th style="text-align: right;">'.$PFN_conf->t('Xcol_erro').':&nbsp;</th>'
					.'<td>'.stripslashes($partes[5][0]).'</td></tr>'
				.'</table><br />';

			if ($i++ && $i > $my_lineas) {
				break;
			}
		}
	} else {
		$erros[] = 29;
	}
} else {
	$erros[] = 29;
}
?>
