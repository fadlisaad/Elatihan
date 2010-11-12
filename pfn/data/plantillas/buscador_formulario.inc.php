<?php
/****************************************************************************
* data/plantillas/buscador_formulario.inc.php
*
* plantilla para la visualizaci�n de la acci�n de buscar un fichero o directorio
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
<script type="text/javascript"><!--

function desmarca_campo (cal) {
	formu = document.getElementById('formulario');
	
	for (i=0; i < formu.length; i++) {
		if (formu.elements[i].name == "campos_buscar[]") {
			if (cal == "nome") {
				if (formu.elements[i].value == "nome" ) {
					formu.elements[i].checked = false;
				}
			} else {
				if (formu.elements[i].value != "nome" ) {
					formu.elements[i].checked = false;
				}
			}
		}
	}
}

//--></script>

<div id="ver_info">
	<div class="bloque_info"><h1><?php echo $PFN_conf->t('accion').' &raquo; '.$PFN_conf->t('buscador'); ?></h1></div>
	<div class="bloque_info">
		<form action="accion.php?<?php echo PFN_get_url(false); ?>" method="post" id="formulario" onsubmit="return submitonce();">
		<fieldset>
		<input type="hidden" name="accion" value="buscador" />
		<input type="hidden" name="executa" value="true" />

		<table class="tabla_info" summary="">
			<tr>
				<th><label for="palabra_buscar_1"><?php echo $PFN_conf->t('buscar'); ?></label></th>
				<td><input type="text" id="palabra_buscar_1" name="palabra_buscar" value="<?php echo htmlentities($PFN_vars->post('palabra_buscar'), ENT_NOQUOTES, $PFN_conf->g('charset')); ?>" style="width: 25em;" /></td>
			</tr>
			<tr>
				<th><label for="donde_buscar_1"><?php echo $PFN_conf->t('donde'); ?></label></th>
				<td>
					<table summary="">
						<tr>
							<th><input type="radio" id="donde_buscar_1" name="donde_buscar" value="1" <?php echo ($PFN_vars->post('donde_buscar') == '1')?'checked="checked"':''; ?> /> <label for="donde_buscar_1"><?php echo $PFN_conf->t('este_directorio'); ?></label></th>
							<th><input type="radio" id="donde_buscar_2" name="donde_buscar" value="2" <?php echo ($PFN_vars->post('donde_buscar') == '2')?'checked="checked"':''; ?> /> <label for="donde_buscar_2"><?php echo $PFN_conf->t('este_dir_subdir'); ?></label></th>
							<th><input type="radio" id="donde_buscar_3" name="donde_buscar" value="3" <?php echo ($PFN_vars->post('donde_buscar') == '3')?'checked="checked"':''; ?> /> <label for="donde_buscar_3"><?php echo $PFN_conf->t('toda_raiz'); ?></label></th>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th><?php echo $PFN_conf->t('campos'); ?></th>
				<td>
					<table summary="">
						<tr>
							<th>
								<input type="checkbox" id="campos_buscar_0" name="campos_buscar[]" value="nome" onclick="desmarca_campo('mais');" onkeypress="desmarca_campo('mais');"<?php echo @in_array('nome', $PFN_vars->post('campos_buscar'))?'checked="checked"':''; ?> class="checkbox" />
								<label for="campos_buscar_0"><?php echo $PFN_conf->t('nome'); ?></label>
							</th>
<?php
if ($PFN_conf->g('inc','estado')) {
	$cnt = $i = 1;

	foreach ($PFN_conf->g('inc','campos_indexar') as $v) {
		if ($cnt == 3) {
			echo '<tr valign="top">';
			$cnt = 0;
		}

		echo '<th>'
			.'<input type="checkbox" id="campos_buscar_'.$i
			.'" name="campos_buscar[]" value="'.$v.'" onclick="desmarca_campo(\'nome\');" onkeypress="desmarca_campo(\'nome\');"'
			.(@in_array($v, $PFN_vars->post('campos_buscar'))?' checked="checked"':'').' class="checkbox" /> '
			.'<label for="campos_buscar_'.$i.'">'.$PFN_conf->t($v).'</label></th>';

		$cnt++;

		if ($cnt == 3) {
			echo '</tr>';
		}

		$i++;
	}
}
?>
					</table>
				</td>
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
	</div>
</div>
