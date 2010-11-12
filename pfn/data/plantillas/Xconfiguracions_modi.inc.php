<?php
/****************************************************************************
* data/plantillas/Xconfiguracions_modi.inc.php
*
* plantilla para la edici�n de un fichero de configuraci�n
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
<div id="ver_info">
	<div class="bloque_info"><h1><?php echo $PFN_conf->t('xestion').' &raquo; '.$PFN_conf->t('Xconf_editar'); ?></h1></div>
	<div class="bloque_info">
		<?php if ((count($erros) > 0) || $ok) { ?>
		<div class="aviso">
			<?php
			if (count($erros)) {
				foreach ($erros as $v) {
					echo $PFN_conf->t('Xerros', intval($v)).'<br />';
				}
			} if (count($alertas) > 0) {
			?>
			<hr style="border: 1px solid #F00; margin: 5px 0 5px 0;" />
			<?php echo $PFN_conf->t('Xcol_erro'); ?>:
			<br /><?php echo $alertas['erro']; ?>
			<hr style="border: 1px solid #F00; margin: 5px 0 5px 0;" />
			<?php echo $PFN_conf->t('Xcol_linha'); ?>:
			<p style="color: #999;"><?php echo $alertas['linha-1']; ?></p>
			<h3 style="color: #333;"><?php echo $alertas['linha']; ?></h3>
			<p style="color: #999;"><?php echo $alertas['linha+1']; ?></p>
			<?php
			} if ($ok) {
				echo $PFN_conf->t('Xok', intval($ok)).'<br />';
			}
			?>
		</div>
		<?php } ?>

		<div style="width: 100%; text-align: center;">
			<h2><?php echo $PFN_usuarios->get('conf'); ?></h2>
			<form action="gdar.php?<?php echo PFN_get_url(false); ?>" method="post" onsubmit="return submitonce();">
			<fieldset>
			<input type="hidden" name="executa" value="true" />
			<input type="hidden" name="id_conf" value="<?php echo $id_conf; ?>" />
			<textarea name="texto" style="width: 100%; height: 400px;"><?php echo htmlentities($texto, ENT_NOQUOTES, $PFN_conf->g('charset')); ?></textarea>
			<br /><br /><input type="reset" value=" <?php echo $PFN_conf->t('cancelar'); ?> " class="boton" onclick="enlace('index.php?<?php echo PFN_cambia_url('id_conf', $id_conf, false); ?>');" />
			<input type="submit" value=" <?php echo $PFN_conf->t('aceptar'); ?> " style="margin-left: 40px;" class="boton" />
			</fieldset>
			</form>
		</div>
	</div>
</div>
