<?php
/****************************************************************************
* data/plantillas/renomear.inc.php
*
* plantilla para la visualizaci�n de la acci�n de renombrar un fichero
* o directorio
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
?>
		<div class="bloque_info"><h1><?php echo $PFN_conf->t('accion').' &raquo; '.$PFN_conf->t('renomear'); ?></h1></div>
		<form id="formulario" action="accion.php?<?php echo PFN_cambia_url('accion','renomear',false); ?>" method="post" onsubmit="return submitonce();">
		<fieldset>
		<input type="hidden" name="executa" value="true" />
		<input type="hidden" name="cal" value="<?php echo $cal; ?>" />

		<table class="tabla_info" summary="">
			<tr>
				<th><label for="antigo"><?php echo $PFN_conf->t('orixinal'); ?>:</label></th>
				<td><?php echo $PFN_vars->get('cal'); ?></td>
			</tr>
			<tr>
				<th><label for="novo_nome"><?php echo $PFN_conf->t('novo'); ?>:</label></th>
				<td><input type="text" id="novo_nome" name="novo_nome" value="<?php echo htmlentities($PFN_vars->get('cal'), ENT_NOQUOTES, $PFN_conf->g('charset')); ?>" class="text" /></td>
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
		<script type="text/javascript"><!--

		document.getElementById('novo_nome').focus();

		//--></script>
	</div>
</div>
