<?php
/****************************************************************************
* data/plantillas/Xconfiguracions_ver.inc.php
*
* plantilla para la visualizaci�n del contenido de un fichero de configuraci�n
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
<script type="text/javascript"><!--

function eliminar () {
	if (confirm(HtmlDecode('<?php echo addslashes($PFN_conf->t('Xeliminar_conf')); ?>'))) {
		enlace('eliminar.php?<?php echo PFN_cambia_url('id_conf', $id_conf, false); ?>');
	}
}

//--></script>

<div id="ver_info">
	<div class="bloque_info"><h1><?php echo $PFN_conf->t('xestion').' &raquo; '.$PFN_conf->t('Xconf_ver'); ?></h1></div>
	<div class="bloque_info">
		<input type="reset" value=" <?php echo $PFN_conf->t('voltar'); ?> " class="boton" onclick="enlace('index.php?<?php echo PFN_cambia_url('id_conf', $id_conf, false); ?>');" />
		<?php if ($editar) { ?>
		<input type="button" value=" <?php echo $PFN_conf->t('editar'); ?> " class="boton" style="margin-left: 40px;" onclick="enlace('modi.php?<?php echo PFN_cambia_url('id_conf', $id_conf, false); ?>');" />
		<?php if ($PFN_usuarios->get('vale')) { ?>
		<input type="button" value=" <?php echo $PFN_conf->t('eliminar'); ?> " class="boton" style="margin-left: 40px;" onclick="eliminar();" />
		<?php } ?>
		<?php } ?>
		<br /><br />

		<div>
			<?php
			if (count($erros) > 0) {
				echo '<div class="aviso">'.$PFN_conf->t('Xerros', $erros[0]).'</div>';
			} else {
				echo '<pre>'.PFN_textoArquivo2pantalla($PFN_arquivos->get_contido($nome_arq), true).'</pre>';
			}
			?>
		</div>
		<br /><input type="reset" value=" <?php echo $PFN_conf->t('voltar'); ?> " class="boton" onclick="enlace('index.php?<?php echo PFN_cambia_url('id_conf', $id_conf, false); ?>');" />
		<?php if ($editar) { ?>
		<input type="button" value=" <?php echo $PFN_conf->t('editar'); ?> " class="boton" style="margin-left: 40px;" onclick="enlace('modi.php?<?php echo PFN_cambia_url('id_conf', $id_conf, false); ?>');" />
		<?php if ($PFN_usuarios->get('vale')) { ?>
		<input type="button" value=" <?php echo $PFN_conf->t('eliminar'); ?> " class="boton" style="margin-left: 40px;" onclick="eliminar();" />
		<?php } ?>
		<?php } ?>
	</div>
</div>
