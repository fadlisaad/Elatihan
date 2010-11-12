<?php
/****************************************************************************
* data/accions/redimensionar_dir.inc.php
*
* Realiza la visualizaci�n o acci�n de crear un thumbnail de todas las
* im�genes de un directorio
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

$PFN_tempo->rexistra('precodigo');

$vale = false;
$destino = $PFN_conf->g('raiz','path').$PFN_niveles->path_correcto($dir);
$imx_path = $PFN_niveles->path_correcto($destino.'/'.$cal);

$contido = $PFN_niveles->get_contido($imx_path,'nome','asc',true);

foreach ($contido['arq']['nome'] as $v) {
	if ($PFN_imaxes->e_imaxe($imx_path.'/'.$v)) {
		$vale = true;
		break;
	}
}

include ($PFN_paths['plantillas'].'cab.inc.php');
include ($PFN_paths['web'].'opcions.inc.php');
include ($PFN_paths['plantillas'].'posicion.inc.php');
include ($PFN_paths['plantillas'].'info_cab.inc.php');
include ($PFN_paths['plantillas'].'redimensionar_dir.inc.php');
include ($PFN_paths['plantillas'].'pe.inc.php');
?>
