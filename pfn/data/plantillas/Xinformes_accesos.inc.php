<?php
/****************************************************************************
* data/plantillas/Xinformes_accesos.inc.php
*
* plantilla para la visualizaci�n del informe de accesos
*

PHPfileNavigator versi�n 2.1.0

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
				<strong><?php echo $PFN_conf->t('Xdesc_accesos'); ?></strong><br /><br />
				<table width="100%" summary="">
					<tr>
						<td style="width: 50%" valign="top">
							<ul>
								<li><input type="checkbox" name="ae_amosar[]" id="ae_amosar_1" value="entradas" <?php echo $ae_entradas?'checked="checked"':''; ?> class="checkbox" />&nbsp;&nbsp;<label for="ae_amosar_1"><?php echo $PFN_conf->t('Xamosar_entradas'); ?></label></li>
								<li><input type="checkbox" name="ae_amosar[]" id="ae_amosar_2" value="saidas" <?php echo $ae_saidas?'checked="checked"':''; ?> class="checkbox" />&nbsp;&nbsp;<label for="ae_amosar_2"><?php echo $PFN_conf->t('Xamosar_saidas'); ?></label></li>
								<li><input type="checkbox" name="ae_amosar[]" id="ae_amosar_3" value="erros" <?php echo $ae_erros?'checked="checked"':''; ?> class="checkbox" />&nbsp;&nbsp;<label for="ae_amosar_3"><?php echo $PFN_conf->t('Xamosar_erros'); ?></label></li>
								<li><input type="checkbox" name="ae_amosar[]" id="ae_amosar_4" value="sen_datos" <?php echo $ae_sen_datos?'checked="checked"':''; ?> class="checkbox" />&nbsp;&nbsp;<label for="ae_amosar_4"><?php echo $PFN_conf->t('Xamosar_sen_datos'); ?></label></li>
							</ul>
						</td>
						<td style="width: 50%" valign="top">
							<label for="ae_lineas"><?php echo $PFN_conf->t('Xamosar_lineas'); ?>:</label>
							<input type="text" name="ae_lineas" id="ae_lineas" value="<?php echo $ae_lineas; ?>" size="5" /><br /><br />
							<label for="ae_buscar"><?php echo $PFN_conf->t('Xbuscar_usuario'); ?>:</label>
							<input type="text" name="ae_buscar" id="ae_buscar" value="<?php echo $PFN_vars->post('ae_buscar'); ?>" size="20" />
						</td>
					</tr>
				</table>
