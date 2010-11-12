<?php
/****************************************************************************
* data/plantillas/Xvarios_indexador.inc.php
*
* plantilla para la visualizaci�n de la secci�n de indexador dentro de
* la administraci�n de Varios
*

PHPfileNavigator versi�n 2.3.2

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
		<div id="capa_indexador">
			<h2><?php echo $PFN_conf->t('Xreindexar'); ?></h2>

			<?php if ($executa == 'indexador') { ?>
			<div class="aviso">
				<?php
				if (count($erros)) {
					foreach ($erros as $v) {
						echo $PFN_conf->t('Xerros',$v).'<br />';
					}
				} else {
					echo $PFN_conf->t('Xok_reindexar').' '.$PFN_indexador->cnt('dir').' '.$PFN_conf->t('dirs')
						.' | '.$PFN_indexador->cnt('arq').' '.$PFN_conf->t('arqs').'<br /><br />'
						.'<a href="#" onclick="amosa_axuda(\'detalle_indexador\');">'
						.$PFN_conf->t('Xver_detalle').'</a>'
						.'<div id="detalle_indexador" style="display: none;"><pre>'.$txt.'</pre></div>';
				}
				?>
			</div>
			<?php } ?>

			<form action="index.php?<?php echo PFN_get_url(false); ?>" method="post" onsubmit="return submitonce();">
			<fieldset>
			<input type="hidden" name="executa" value="indexador" />

			<table class="tabla_info" summary="">
				<caption><?php echo $PFN_conf->t('Xreindexar_info'); ?></caption>
				<tr>
					<th><strong><?php echo $PFN_conf->t('Xconfirmar_reindexar'); ?></strong></th>
					<td>
						<strong><label for="indexador_id_raiz"><?php echo $PFN_conf->t('Xescolle_raiz'); ?>:</label></strong>

						<select id="indexador_id_raiz" name="indexador_id_raiz">
							<?php
							foreach ($raices as $k => $v) {
								echo '<option value="'.$k.'"'.(($k == $id_raiz)?' selected="selected"':'').'>'.$v.'</option>';
							}
							?>
						</select>
					</td>
					<th><input type="submit" value=" <?php echo $PFN_conf->t('enviar'); ?> " /></th>
				</tr>
			</table>

			</fieldset>
			</form>
		</div>
