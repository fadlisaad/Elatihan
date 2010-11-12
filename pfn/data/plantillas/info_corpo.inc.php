<?php
/****************************************************************************
* data/plantillas/info_corpo.inc.php
*
* plantilla para la visualizaci�n del detalle de ifnormaci�n de un fichero o
* directorio
*

PHPfileNavigator versi�n 2.3.0

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
		<?php if (in_array('descricion', $capas)) { ?>
		<div class="bloque_info">
			<h1><?php echo $PFN_conf->t('informacion_xeral'); ?></h1>
			<table class="tabla_info" summary="">
				<tr>
					<th><?php echo $PFN_conf->t('tamano_real'); ?></th>
					<td><?php echo $tamano_real; ?></td>
					<th><?php echo $PFN_conf->t('propietario'); ?></th>
					<td><?php echo $datos['uid']; ?></td>
				</tr>
				<tr>
					<th><?php echo $PFN_conf->t('tamano_disco'); ?></th>
					<td><?php echo $tamano_disco; ?></td>
					<th><?php echo $PFN_conf->t('grupo'); ?></th>
					<td><?php echo $datos['gid']; ?></td>
				</tr>
				<tr>
					<th><?php echo $PFN_conf->t('ultima_modificacion'); ?></th>
					<td><?php echo date($PFN_conf->g('data'), $datos['mtime']); ?></td>
					<th><?php echo $PFN_conf->t('permisos'); ?></th>
					<td><?php echo $permisos; ?></td>
				</tr>
				<?php if ($e_imaxe) { ?>
				<tr>
					<th><?php echo $PFN_conf->t('ancho_imaxe'); ?></th>
					<td><?php echo $e_imaxe[0]; ?>px</td>
					<th><?php echo $PFN_conf->t('alto_imaxe'); ?></th>
					<td><?php echo $e_imaxe[1]; ?>px</td>
				</tr>
				<?php } ?>
			</table>
		</div>
		<?php } if (in_array('enlaces', $capas)) { ?>
		<div class="bloque_info">
			<h1><?php echo $PFN_conf->t('enlaces'); ?></h1>
			<table class="tabla_info" summary="">
				<tr>
					<th><?php echo $PFN_conf->t('absoluto'); ?></th>
					<td><?php echo $enlace_abs; ?></td>
				</tr>
				<tr>
					<th><?php echo $PFN_conf->t('relativo'); ?></th>
					<td><?php echo $enlace_rel; ?></td>
				</tr>
				<tr>
					<th><?php echo $PFN_conf->t('ahref'); ?></th>
					<td><?php echo $enlace_href; ?></td>
				</tr>
				<tr>
					<th><?php echo $PFN_conf->t('phpwiki'); ?></th>
					<td><?php echo $enlace_phpwiki; ?></td>
				</tr>
				<tr>
					<th><?php echo $PFN_conf->t('mediawiki'); ?></th>
					<td><?php echo $enlace_mediawiki; ?></td>
				</tr>
			</table>
		</div>
		<?php } if (count($datos_inc['desc'][0]['valor']) != '') { ?>
		<div class="bloque_info">
			<h1><?php echo $PFN_conf->t('informacion_adicional'); ?></h1>
			<table class="tabla_info" summary="">
			<?php foreach ($datos_inc['desc'] as $v) { ?>
				<tr>
					<th><?php echo $v['campo']; ?></th>
					<td><?php echo $v['valor']; ?></td>
				</tr>
			<?php } ?>
			</table>
		</div>
		<?php } if (count($datos_inc['form']) > 0) { ?>
		<div class="bloque_info">
			<h1><?php echo $PFN_conf->t('form_info_adicional'); ?></h1>
			<form id="form_inc" action="accion.php?<?php echo PFN_cambia_url(array('dir','arq','accion'),array($dir,$arq,'info'),false); ?>" method="post" onsubmit="return submitonce();">
			<fieldset>
			<input type="hidden" name="executa" value="true" />
			<input type="hidden" name="formulario" value="form_inc" />
			<input type="hidden" name="cal" value="<?php echo $cal; ?>" />
			<table class="tabla_info" summary="">
			<?php foreach ($datos_inc['form'] as $k => $v) { ?>
				<tr>
					<th><?php echo $v['campo']; ?></th>
					<td><?php echo $v['valor']; ?></td>
				</tr>
			<?php } ?>
				<tr>
					<th>&nbsp;</th>
					<td>
						<input type="reset" name="<?php echo $PFN_conf->t('cancelar'); ?>" value="<?php echo $PFN_conf->t('cancelar'); ?>" />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="submit" name="<?php echo $PFN_conf->t('aceptar'); ?>" value="<?php echo $PFN_conf->t('aceptar'); ?>" />
					</td>
				</tr>
			</table>
			</fieldset>
			</form>
		</div>
		<?php } if (in_array('protexer', $capas) && $PFN_conf->g('usuario','admin') && $tipo == 'dir') { ?>
		<div class="bloque_info">
			<h1><?php echo $PFN_conf->t('protexer'); ?></h1>
			<?php if ($protexido) { ?>
			<div class="aviso"><?php echo $PFN_conf->t('directorio_protexido'); ?>
			<?php } ?>
			<form id="form_protexer" action="accion.php?<?php echo PFN_cambia_url(array('dir','arq','accion'),array($dir,$arq,'info'),false); ?>" method="post" onsubmit="return submitonce();">
			<fieldset>
			<input type="hidden" name="executa" value="true" />
			<input type="hidden" name="formulario" value="protexer" />
			<input type="hidden" name="cal" value="<?php echo $cal; ?>" />
			<table class="tabla_info" summary="">
				<tr>
					<th><?php echo $PFN_conf->t('usuario'); ?></th>
					<td><input type="text" name="ht_usuario" value="" class="text" /></td>
				</tr>
				<tr>
					<th><?php echo $PFN_conf->t('contrasinal'); ?></th>
					<td><input type="password" name="ht_contrasinal" value="" class="text" /></td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>
						<input type="reset" name="<?php echo $PFN_conf->t('cancelar'); ?>" value="<?php echo $PFN_conf->t('cancelar'); ?>" />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="submit" name="<?php echo $PFN_conf->t('aceptar'); ?>" value="<?php echo $PFN_conf->t('aceptar'); ?>" />
					</td>
				</tr>
			</table>
			</fieldset>
			</form>
			<?php if ($protexido) { ?>
			</div>
			<?php } ?>
		</div>
		<?php } ?>
	</div>
</div>
