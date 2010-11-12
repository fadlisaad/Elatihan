<?php
/****************************************************************************
* xestion/configuracions/ver.inc.php
*
* Carga el contenido de un fichero de configuraci�n
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

$editar = false;
$color = false;
$erros = array();

$id_conf = $PFN_vars->get('id_conf');

$existe = $PFN_usuarios->init('configuracion', $id_conf);
$nome_arq = $PFN_niveles->path_correcto($PFN_paths['conf'].$PFN_usuarios->get('conf').'.inc.php');

if ($existe && is_file($nome_arq)) {
	if (is_writable($nome_arq)) {
		$editar = true;
	}
} else {
	$erros[] = 18;
}

include_once ($PFN_paths['include'].'class_arquivos.php');
$PFN_arquivos = new PFN_Arquivos($PFN_conf);
?>
