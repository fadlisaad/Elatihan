<?php
/****************************************************************************
* xestion/usuarios/eliminar.php
*
* Elimina un usuario y su relaci�n con las raices
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

$relativo = '../../';

include ($relativo.'paths.php');
include_once ($PFN_paths['include'].'basicweb.php');
include_once ($PFN_paths['include'].'Xusuarios.php');

PFN_quita_url_SERVER('id_usuario');

session_write_close();

$erros = array();
$id_usuario = intval($PFN_vars->get('id_usuario'));

if (empty($id_usuario) || ($id_usuario == $sPFN['usuario']['id'])) {
	$erros[] = 13;
} else {
	$query = 'DELETE FROM '.$PFN_usuarios->tabla('usuarios')
		.' WHERE id="'.$id_usuario.'";';
	
	if ($PFN_usuarios->actualizar($query) == -1) {
		$erros[] = 6;
	} else {
		$query = 'DELETE FROM '.$PFN_usuarios->tabla('r_u')
			.' WHERE id_usuario="'.$id_usuario.'";';
		$PFN_usuarios->actualizar($query);

		$info_usuario = $PFN_niveles->path_correcto($PFN_paths['info'].'usuario'.$id_usuario);

		if (is_dir($info_usuario)) {
			include_once ($PFN_paths['include'].'class_accions.php');

			$PFN_conf->p(false, 'logs', 'accions');

			$PFN_accions = new PFN_Accions($PFN_conf);
			$PFN_accions->eliminar($info_usuario);
		}
	}
}

$ok = count($erros)?false:2;

Header('Location: ../index.php?'.PFN_cambia_url(array('id_usuario','opc','erros','ok'), array('','2',implode(',', $erros),$ok), false, true));
exit;
?>
