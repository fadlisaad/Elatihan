<?php
/****************************************************************************
* data/plantillas/Xinformes_accions.inc.php
*
* plantilla para la visualizaci�n del informe sobre acciones a ficheros y
* directorios
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

defined('OK') && defined('XESTION') or die();
?>
				<strong><?php echo $PFN_conf->t('Xdesc_accions'); ?></strong><br /><br />
				<table width="100%" summary="">
					<tr>
						<td style="width: 50%" valign="top">
							<ul>
								<li><input type="checkbox" name="ai_amosar[]" id="ai_amosar_1" value="copiar_arq" <?php echo $ai_copiar_arq?'checked="checked"':''; ?> class="checkbox" />&nbsp;&nbsp;<label for="ai_amosar_1"><?php echo $PFN_conf->t('Xamosar_copiar_arq'); ?></label></li>
								<li><input type="checkbox" name="ai_amosar[]" id="ai_amosar_2" value="copiar_dir" <?php echo $ai_copiar_dir?'checked="checked"':''; ?> class="checkbox" />&nbsp;&nbsp;<label for="ai_amosar_2"><?php echo $PFN_conf->t('Xamosar_copiar_dir'); ?></label></li>
								<li><input type="checkbox" name="ai_amosar[]" id="ai_amosar_3" value="mover_arq" <?php echo $ai_mover_arq?'checked="checked"':''; ?> class="checkbox" />&nbsp;&nbsp;<label for="ai_amosar_3"><?php echo $PFN_conf->t('Xamosar_mover_arq'); ?></label></li>
								<li><input type="checkbox" name="ai_amosar[]" id="ai_amosar_4" value="mover_dir" <?php echo $ai_mover_dir?'checked="checked"':''; ?> class="checkbox" />&nbsp;&nbsp;<label for="ai_amosar_4"><?php echo $PFN_conf->t('Xamosar_mover_dir'); ?></label></li>
								<li><input type="checkbox" name="ai_amosar[]" id="ai_amosar_5" value="eliminar_arq" <?php echo $ai_eliminar_arq?'checked="checked"':''; ?> class="checkbox" />&nbsp;&nbsp;<label for="ai_amosar_5"><?php echo $PFN_conf->t('Xamosar_eliminar_arq'); ?></label></li>
								<li><input type="checkbox" name="ai_amosar[]" id="ai_amosar_6" value="eliminar_dir" <?php echo $ai_eliminar_dir?'checked="checked"':''; ?> class="checkbox" />&nbsp;&nbsp;<label for="ai_amosar_6"><?php echo $PFN_conf->t('Xamosar_eliminar_dir'); ?></label></li>
								<li><input type="checkbox" name="ai_amosar[]" id="ai_amosar_7" value="crear_dir" <?php echo $ai_crear_dir?'checked="checked"':''; ?> class="checkbox" />&nbsp;&nbsp;<label for="ai_amosar_7"><?php echo $PFN_conf->t('Xamosar_crear_dir'); ?></label></li>
								<li><input type="checkbox" name="ai_amosar[]" id="ai_amosar_8" value="subir_arq" <?php echo $ai_subir_arq?'checked="checked"':''; ?> class="checkbox" />&nbsp;&nbsp;<label for="ai_amosar_8"><?php echo $PFN_conf->t('Xamosar_subir_arq'); ?></label></li>
								<li><input type="checkbox" name="ai_amosar[]" id="ai_amosar_9" value="subir_url" <?php echo $ai_subir_url?'checked="checked"':''; ?> class="checkbox" />&nbsp;&nbsp;<label for="ai_amosar_9"><?php echo $PFN_conf->t('Xamosar_subir_url'); ?></label></li>
								<li><input type="checkbox" name="ai_amosar[]" id="ai_amosar_10" value="renomear" <?php echo $ai_renomear?'checked="checked"':''; ?> class="checkbox" />&nbsp;&nbsp;<label for="ai_amosar_10"><?php echo $PFN_conf->t('Xamosar_renomear'); ?></label></li>
								<li><input type="checkbox" name="ai_amosar[]" id="ai_amosar_11" value="enlazar_arq" <?php echo $ai_enlazar_arq?'checked="checked"':''; ?> class="checkbox" />&nbsp;&nbsp;<label for="ai_amosar_11"><?php echo $PFN_conf->t('Xamosar_enlazar_arq'); ?></label></li>
								<li><input type="checkbox" name="ai_amosar[]" id="ai_amosar_12" value="editar" <?php echo $ai_editar?'checked="checked"':''; ?> class="checkbox" />&nbsp;&nbsp;<label for="ai_amosar_12"><?php echo $PFN_conf->t('Xamosar_editar'); ?></label></li>
								<li><input type="checkbox" name="ai_amosar[]" id="ai_amosar_13" value="extraer" <?php echo $ai_extraer?'checked="checked"':''; ?> class="checkbox" />&nbsp;&nbsp;<label for="ai_amosar_13"><?php echo $PFN_conf->t('Xamosar_extraer'); ?></label></li>
								<li><input type="checkbox" name="ai_amosar[]" id="ai_amosar_14" value="enviar_correo" <?php echo $ai_enviar_correo?'checked="checked"':''; ?> class="checkbox" />&nbsp;&nbsp;<label for="ai_amosar_14"><?php echo $PFN_conf->t('Xamosar_enviar_correo'); ?></label></li>
							</ul>
						</td>
						<td style="width: 50%" valign="top">
							<label for="ai_raiz"><?php echo $PFN_conf->t('Xescolle_raiz'); ?>:</label>
							<select name="ai_raiz" id="ai_raiz">
							<?php for ($PFN_usuarios->init('raices'); $PFN_usuarios->mais(); $PFN_usuarios->seguinte()) { ?>
								<option value="<?php echo $PFN_usuarios->get('id'); ?>"<?php echo ($ai_raiz == $PFN_usuarios->get('id'))?' selected="selected"':''; ?>><?php echo $PFN_usuarios->get('nome'); ?></option>
							<?php } ?>
							</select><br /><br />
							<label for="ai_lineas"><?php echo $PFN_conf->t('Xamosar_lineas'); ?>:</label>
							<input type="text" name="ai_lineas" id="ai_lineas" value="<?php echo $ai_lineas; ?>" size="5" /><br /><br />
							<label for="ai_buscar"><?php echo $PFN_conf->t('Xbuscar_texto'); ?>:</label>
							<input type="text" name="ai_buscar" id="ai_buscar" value="<?php echo $PFN_vars->post('ai_buscar'); ?>" size="20" />
						</td>
					</tr>
				</table>
