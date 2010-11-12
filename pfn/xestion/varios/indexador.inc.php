<?php
/****************************************************************************
* xestion/varios/indexador.inc.php
*
* Realiza el proceso de reindexaci�n de ficheros y directorios
*

PHPfileNavigator versi�n 2.1.0

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

$id_raiz = intval($PFN_vars->post('indexador_id_raiz'));

if ($id_raiz > 0) {
	$PFN_usuarios->init('raiz', $id_raiz);

	if ($PFN_usuarios->filas() === 1) {
		include_once ($PFN_paths['include'].'class_inc.php');
		include_once ($PFN_paths['include'].'class_indexador.php');

		$PFN_inc = new PFN_INC($PFN_conf);
		$PFN_indexador = new PFN_Indexador($PFN_conf);

		$PFN_indexador->niveles($PFN_niveles);
		$PFN_indexador->inc($PFN_inc);

		$txt = $PFN_indexador->reindexar($PFN_usuarios->get('id'), $PFN_usuarios->get('path'));
	} else {
		$erros[] = 36;
	}
} else {
	$erros[] = 36;
}
?>
