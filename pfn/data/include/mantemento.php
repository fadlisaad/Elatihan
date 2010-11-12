<?php
/****************************************************************************
* data/include/mantemento.php
*
* Realiza una comprobaci�n peri�dica del estado del las ra�ces del servidor
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

defined('OK') or die();

$data_mantemento = date('Y-m-d', mktime(0,0,0,date('m'),date('d')-2,date('Y')));

if ($PFN_conf->g('raiz','peso_maximo') && ($PFN_conf->g('raiz','mantemento') < $data_mantemento)) {
	$actual = $PFN_niveles->get_tamano($PFN_conf->g('raiz','path'));

	$PFN_usuarios->accion('peso', $actual, $PFN_conf->g('raiz','id'));
	$PFN_usuarios->accion('mantemento_raiz', $PFN_conf->g('raiz','id'));

	$PFN_conf->p($actual, 'raiz', 'peso_actual');
}

if ($PFN_conf->g('usuario','mantemento') < $data_mantemento) {
	$data_mantemento = date('Ym', mktime(0,0,0,date('m')-$PFN_conf->g('logs_usuarios'),1,date('Y')));
	$lista_dir_usuario = $PFN_niveles->carga_contido($PFN_conf->g('info_usuario'), true, true);

	foreach ($lista_dir_usuario['nome'] as $v) {
		$atopa_log = array();
		preg_match('/^descargas\.([0-9]{6}).php/', $v, $atopa_log);

		if (!empty($atopa_log[1]) && ($atopa_log[1] < $data_mantemento)) {
			@unlink($PFN_conf->g('info_usuario').'/'.$v);
		}
	}

	$PFN_usuarios->accion('mantemento_usuario', $PFN_conf->g('usuario','id'));

	$sPFN['usuario']['mantemento'] = date('Y-m-d');

	session_register($sPFN);
	$PFN_vars->session('sPFN',$sPFN);
}
?>
