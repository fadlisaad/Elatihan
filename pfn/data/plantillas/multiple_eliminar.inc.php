<?php
/****************************************************************************
* data/plantillas/multiple_eliminar.inc.php
*
* plantilla para la visualizaci�n de la acci�n de eliminar multiples ficheros
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

defined('OK') && defined('ACCION') or die();
?>
<div id="ver_info">
	<div class="bloque_info"><h1><?php echo $PFN_conf->t('accion').' &raquo; '.$PFN_conf->t($accion); ?></h1></div>
	<div class="bloque_info">
		<form action="accion.php?<?php echo PFN_cambia_url('accion',$accion,false); ?>" method="post" onsubmit="return submitonce();">
		<fieldset>
		<input type="hidden" name="executa" value="true" />
		<?php foreach ($multiple_escollidos as $v) { ?>
		<input type="hidden" name="multiple_escollidos[]" value="<?php echo $v; ?>" />
		<?php } ?>

		<div class="aviso_info"><?php echo $PFN_conf->t('estado.multiple_eliminar',2); ?></div>

		<br /><div style="width: 100%; text-align: center;">
			<table summary=""><tr><td style="text-align: left;"><?php echo $PFN_arbore->arbore_txt; ?></td></tr></table>
			<br /><p>
			<input type="reset" value=" <?php echo $PFN_conf->t('cancelar'); ?> " class="boton" onclick="enlace('navega.php?<?php echo PFN_get_url(false); ?>');" />
			<input type="submit" value=" <?php echo $PFN_conf->t('aceptar'); ?> " class="boton" style="margin-left: 40px;" />
			</p>
		</div>

		<br /><table id="listado" summary="">
		<?php foreach ($multiple_escollidos as $k => $v) { ?>
			<tr class="trarq<?php echo !($k % 2); ?>">
				<td class="tdnome">
					<?php if (is_dir($PFN_conf->g('raiz','path').$PFN_niveles->path_correcto($dir.'/').'/'.$v)) { ?>
					<img src="<?php echo $PFN_imaxes->icono('dir'); ?>" alt="<?php echo $PFN_conf->t('dir'); ?>" class="icono" />
					<?php } else { ?>
					<img src="<?php echo $PFN_imaxes->icono($v); ?>" alt="<?php echo $PFN_conf->t('arq'); ?>" class="icono" />
					<?php } ?> 
					<?php echo $v; ?>
				</td>
			</tr>
		<?php } ?>
		</table>

		</fieldset>
		</form>
	</div>
</div>
