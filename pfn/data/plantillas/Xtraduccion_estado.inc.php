<?php
/****************************************************************************
* data/plantillas/Xtraduccion_estado.inc.php
*
* plantilla para la visualizaci�n de la pantalla para el estado de las
* traducciones
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
<div id="ver_info">
	<div class="bloque_info"><h1><?php echo $PFN_conf->t('xestion').' &raquo; '.$PFN_conf->t('Xtraduccion'); ?></h1></div>
	<div class="bloque_info">
		<div id="Xinformes_cab">
			<div style="background: #EEE; text-align: center;"><a href="index.php?<?php echo PFN_get_url(false); ?>"><?php echo $PFN_conf->t('Xtraduccion'); ?></a></div>

			<br /><?php echo $PFN_conf->t('Xtraduccion_estado'); ?><br />
			<form action="estado.php?<?php echo PFN_get_url(false); ?>" method="post" onsubmit="return submitonce();">
			<fieldset>
			<input type="hidden" name="executa" value="comprobar" />

			<br /><div style="text-align: center;">
				<strong><?php echo $PFN_conf->t('orixe'); ?>:</strong>
				<select name="tr_idioma_base">
					<option value=""><?php echo $PFN_conf->t('Xescolle_idioma'); ?></option>
					<?php
					foreach ($idiomas_valen as $k => $v) {
					?>
					<option value="<?php echo $k; ?>"<?php echo ($k == $tr_idioma_base)?' selected="selected"':''; ?>> <?php echo $v; ?> </option>
					<?php } ?>
				</select>

				<br /><br />
				<input type="reset" value=" <?php echo $PFN_conf->t('voltar'); ?> " class="boton" onclick="enlace('../index.php?<?php echo PFN_get_url(false); ?>');" />
				<input type="submit" value=" <?php echo $PFN_conf->t('aceptar'); ?> " style="margin-left: 40px;" class="boton" /><br />
			</div><br />
			</fieldset>
			</form>
		</div>

		<div id="Xinformes_resultado">
			<?php
			if (count($erros) || $ok) {
				echo '<div class="aviso">';

				if (count($erros)) {
					foreach ($erros as $v) {
						echo $PFN_conf->t('Xerros',$v).'<br />';
					}
				} else {
					echo $PFN_conf->t('Xok',6);
				}

				echo '</div><br />';
			}
			?>
		</div>

		<?php echo $txt_informe; ?>

	</div>
</div>
