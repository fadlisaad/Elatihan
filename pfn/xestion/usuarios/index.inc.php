<?php
/****************************************************************************
* xestion/usuarios/index.inc.php
*
* Comprobaciones antes de modificar o a�adir un usuario
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

$Dgrupos = array();

$PFN_usuarios->init('grupos');

for (; $PFN_usuarios->mais(); $PFN_usuarios->seguinte()) {
	$Dgrupos[$PFN_usuarios->get('id')] = $PFN_usuarios->get('nome');
}

if (!is_writable($PFN_paths['info'])) {
	$erro[] = 'Xinfonon_writable';
}

$max_descargas = 0;
$actual_descargas = 0;

if ($id_usuario > 0) {
	$PFN_usuarios->init('usuario',$id_usuario);

	$info_usuario = $PFN_niveles->path_correcto($PFN_paths['info'].'usuario'.$id_usuario);
	$max_descargas = $PFN_usuarios->get('descargas_maximo') / 1024 / 1024;
	$actual = $info_usuario.'/descargas.'.(date('Ym')).'.php';

	if (is_file($actual)) {
		$actual_descargas = include ($actual);
		$actual_descargas = $actual_descargas / 1024 / 1024;
	}
} else {
	$PFN_usuarios->vacia();
}
?>
