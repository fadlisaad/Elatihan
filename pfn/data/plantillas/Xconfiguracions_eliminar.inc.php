<?php
/****************************************************************************
* data/plantillas/Xconfiguracions_eliminar.inc.php
*
* plantilla para la visualizaci�n del resultado de la eliminaci�n de un fichero
* de configuraci�n
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
?>
<table border="0" cellpadding="0" cellspacing="5" width="95%" summary="">
	<tr>
		<td>
			<b><span class="n14"><?php echo $PFN_conf->t('xestion'); ?> &raquo; </span>
			<span class="r14"><?php echo $PFN_conf->t('Xconf_eliminar'); ?></span></b>
		</td>
	</tr>
</table>

<br />
<?php if (count($erros) > 0) { ?>
<input type="button" value=" <?php echo $PFN_conf->t('voltar'); ?> " class="boton" onclick="enlace('index.php?<?php echo PFN_cambia_url('id_conf', $id_conf, false); ?>');">
<?php } else { ?>
<input type="button" value=" <?php echo $PFN_conf->t('voltar'); ?> " class="boton" onclick="enlace('../index.php?<?php echo PFN_cambia_url(array('id_conf','opc'), array('', 4), false); ?>');">
<?php } ?>
<br /><br />

<div id="aviso">
	<span class="ao12"><strong><?php echo $PFN_conf->t('Xintro_eliminar'); ?></strong></span>
	<hr noshade="noshade">
	<?php
	if (count($erros) > 0) {
		foreach ($erros as $v) {
			echo $PFN_conf->t('Xerros', intval($v)).'<br />';
		}
	} else {
		echo $PFN_conf->t('Xok', intval($ok)).'<br />';
	}
	?>
</div>

<br />
<?php if (count($erros) > 0) { ?>
<input type="button" value=" <?php echo $PFN_conf->t('voltar'); ?> " class="boton" onclick="enlace('index.php?<?php echo PFN_cambia_url('id_conf', $id_conf, false); ?>');">
<?php } else { ?>
<input type="button" value=" <?php echo $PFN_conf->t('voltar'); ?> " class="boton" onclick="enlace('../index.php?<?php echo PFN_cambia_url(array('id_conf','opc'), array('',4), false); ?>');">
<?php } ?>
<br />
