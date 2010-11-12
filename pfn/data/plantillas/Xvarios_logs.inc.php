<?php
/****************************************************************************
* data/plantillas/Xvarios_logs.inc.php
*
* plantilla para la visualizaci�n de la secci�n de logs dentro de
* la administraci�n de Varios
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

defined('OK') && defined('XESTION') or die();
?>
		<div id="capa_logs" style="margin-top: 15px;">
			<h2><?php echo $PFN_conf->t('Xarquivos_logs'); ?></h2>

			<?php if ($executa == 'logs' && $ok) { ?>
			<div class="aviso">
				<?php echo $PFN_conf->t('Xok', 7); ?>
			</div>
			<?php } ?>

			<form action="index.php?<?php echo PFN_get_url(false); ?>" method="post" onsubmit="return submitonce();">
			<fieldset>
			<input type="hidden" name="executa" value="logs" />

			<table class="tabla_info" summary="">
				<caption><?php echo $PFN_conf->t('Xlogs_info'); ?></caption>
				<tr>
					<th>
						<?php if (is_file($PFN_paths['logs'].$PFN_conf->g('logs','mysql'))) { ?>
						<input type="checkbox" name="log_mysql" id="log_mysql" value="true" class="checkbox" /> <label for="log_mysql"><?php echo $PFN_conf->t('Xlogs_arq_mysql').' ('.PFN_peso(filesize($PFN_paths['logs'].$PFN_conf->g('logs','mysql'))).')'; ?></label><br />
						<?php
						}

						foreach ($raices as $k => $v) {
							$arq = $PFN_paths['info'].'raiz'.$k.'/'.$PFN_conf->g('logs','accions');

							if (is_file($arq)) {
								
						?>
							<input type="checkbox" name="logs_accions[]" id="logs_accions_<?php echo $k; ?>" value="<?php echo $k; ?>" class="checkbox" /> <label for="logs_accions_<?php echo $k; ?>"><?php echo $PFN_conf->t('Xlogs_arq_accions').' '.$v.' ('.PFN_peso(filesize($arq)).')'; ?></label><br />
						<?php } } ?>
					</th>
					<td><input type="submit" value=" <?php echo $PFN_conf->t('eliminar'); ?> " /></td>
				</tr>
			</table>

			</fieldset>
			</form>
		</div>
