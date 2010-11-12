<?php
/****************************************************************************
* crea_imaxe.php
*
* Visualizar una im�gen seg�n los par�metros recibidos
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

include ('paths.php');
include_once ($PFN_paths['include'].'basicweb.php');

session_write_close();

include_once ($PFN_paths['include'].'class_arquivos.php');
include_once ($PFN_paths['include'].'class_imaxes.php');
include_once ($PFN_paths['include'].'class_accions.php');
include_once ($PFN_paths['include']."class_arquivos.php");

$PFN_arquivos = new PFN_Arquivos($PFN_conf);
$PFN_imaxes = new PFN_Imaxes($PFN_conf);
$PFN_accions = new PFN_Accions($PFN_conf);
$PFN_arquivos = new PFN_Arquivos($PFN_conf);

$PFN_imaxes->arquivos($PFN_arquivos);
$PFN_accions->arquivos($PFN_arquivos);

$imaxe = $PFN_conf->g('raiz','path').$PFN_niveles->path_correcto($dir.'/'.$PFN_vars->get('cal'));
$imaxe = ($PFN_vars->get('peq') == 1)?$PFN_imaxes->nome_pequena($imaxe):$imaxe;

$tamano = PFN_espacio_disco($imaxe, true);

if ($PFN_accions->log_ancho_banda($tamano)) {
	echo $PFN_imaxes->volcar_imaxe($imaxe, $PFN_vars->get('ancho'), $PFN_vars->get('alto'));
}

exit;
?>
