<?php
/****************************************************************************
* data/plantillas/preferencias.inc.php
*
* plantilla para la visualizaci�n de la acci�n de editar las preferencias
* del usuario
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

defined('OK') or die();
?>

<div id="ver_info">
	<div class="bloque_info"><h1><?php echo $PFN_conf->t('preferencias_usuario'); ?></h1></div>
	<div class="bloque_info">
		<?php if ($txt_erro) { ?>
			<div class="aviso"><?php echo $txt_erro; ?></div>
		<?php } else { ?>
		<?php if ($txt_estado) { ?>
			<div class="aviso"><?php echo $txt_estado; ?></div>
		<?php } ?>

		<form action="preferencias.php?<?php echo PFN_get_url(false); ?>" method="post" id="formulario" onsubmit="return submitonce();">
		<fieldset>
		<input type="hidden" name="executa" value="true" />

		<table class="tabla_info" summary="">
			<tr>
				<th><label for="preferencias_nome"><?php echo $PFN_conf->t('nome'); ?>:</label></th>
				<td><input type="text" name="preferencias_nome" id="preferencias_nome" class="text" value="<?php echo $PFN_usuarios->get('nome'); ?>" /></td>
			</tr>
			<tr>
				<th><label for="preferencias_email"><?php echo $PFN_conf->t('correo'); ?>:</label></th>
				<td><input type="text" name="preferencias_email" id="preferencias_email" class="text" value="<?php echo $PFN_usuarios->get('email'); ?>" /></td>
			</tr>
			<tr>
				<th><label for="preferencias_contrasinal"><?php echo $PFN_conf->t('contrasinal'); ?>:</label></th>
				<td><input type="password" name="preferencias_contrasinal" id="preferencias_contrasinal" class="text" value="" /></td>
			</tr>
			<tr>
				<th><label for="preferencias_contrasinal_rep"><?php echo $PFN_conf->t('contrasinal_rep'); ?>:</label></th>
				<td><input type="password" name="preferencias_contrasinal_rep" id="preferencias_contrasinal_rep" class="text" /></td>
			</tr>
			<tr>
				<th>&nbsp;</th>
				<td>
					<input type="reset" value=" <?php echo $PFN_conf->t('cancelar'); ?> " class="boton" onclick="enlace('navega.php?<?php echo PFN_get_url(false); ?>');" />
					<input type="submit" value=" <?php echo $PFN_conf->t('aceptar'); ?> " class="boton" style="margin-left: 40px;" />
				</td>
			</tr>
		</table>

		</fieldset>
		</form>
		<?php } ?>
	</div>
</div>
