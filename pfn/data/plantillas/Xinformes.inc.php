<?php
/****************************************************************************
* data/plantillas/Xinformes.inc.php
*
* plantilla para la visualizaci�n de los informes sobre los logs
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
<div id="ver_info">
	<div class="bloque_info"><h1><?php echo $PFN_conf->t('xestion').' &raquo; '.$PFN_conf->t('Xinformes'); ?></h1></div>
	<div class="bloque_info">
		<div id="Xinformes_cab">
			<form action="index.php?<?php echo PFN_get_url(false); ?>" method="post" onsubmit="cambia_executa(); return submitonce();">
			<fieldset>
			<input type="hidden" id="executa" name="executa" value="" />

			<table class="tabla_info" summary="">
				<tr>
					<th style="text-align: center;">
						<a href="#" onclick="opc = 'mysql'; oculta('capa_accions','capa_accesos','capa_uso_disco','capa_ancho_banda'); amosa('capa_mysql');"><?php echo $PFN_conf->t('Xtit_mysql'); ?></a>
						&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href="#" onclick="opc = 'accions'; oculta('capa_mysql','capa_accesos','capa_uso_disco','capa_ancho_banda'); amosa('capa_accions');"><?php echo $PFN_conf->t('Xtit_accions'); ?></a>
						&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href="#" onclick="opc = 'accesos'; oculta('capa_mysql','capa_accions','capa_uso_disco','capa_ancho_banda'); amosa('capa_accesos');"><?php echo $PFN_conf->t('Xtit_accesos'); ?></a>
						&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href="#" onclick="opc = 'uso_disco'; oculta('capa_mysql','capa_accions','capa_accesos','capa_ancho_banda'); amosa('capa_uso_disco');"><?php echo $PFN_conf->t('Xtit_uso_disco'); ?></a>
						&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href="#" onclick="opc = 'ancho_banda'; oculta('capa_mysql','capa_accions','capa_accesos','capa_uso_disco'); amosa('capa_ancho_banda');"><?php echo $PFN_conf->t('Xtit_ancho_banda'); ?></a>
					</th>
				</tr>
			</table>

			<div id="capa_mysql" style="display: block;">
				<?php include ($PFN_paths['plantillas'].'Xinformes_mysql.inc.php'); ?>
			</div>

			<div id="capa_accions" style="display: none;">
				<?php include ($PFN_paths['plantillas'].'Xinformes_accions.inc.php'); ?>
			</div>

			<div id="capa_accesos" style="display: none;">
				<?php include ($PFN_paths['plantillas'].'Xinformes_accesos.inc.php'); ?>
			</div>

			<div id="capa_uso_disco" style="display: none;">
				<?php include ($PFN_paths['plantillas'].'Xinformes_uso_disco.inc.php'); ?>
			</div>

			<div id="capa_ancho_banda" style="display: none;">
				<?php include ($PFN_paths['plantillas'].'Xinformes_ancho_banda.inc.php'); ?>
			</div><br />

			<div style="text-align: center;">
				<input type="reset" value=" <?php echo $PFN_conf->t('voltar'); ?> " class="boton" onclick="enlace('../index.php?<?php echo PFN_get_url(false); ?>');" />
				<input type="submit" value=" <?php echo $PFN_conf->t('aceptar'); ?> " style="margin-left: 40px;" class="boton" /><br />
			</div><br />
			</fieldset>
			</form>
		</div>

		<div id="Xinformes_resultado">
			<?php
			if (count($erros)) {
				echo '<div class="aviso">';

				foreach ($erros as $v) {
					echo $PFN_conf->t('Xerros',$v).'<br />';
				}

				echo '</div>';
			} else {
				echo $txt;
			}
			?>
		</div>
	</div>
</div>
<script type="text/javascript"><!--

var opc = '<?php echo ($executa == '')?'mysql':$executa; ?>';
var capa = '<?php echo $executa; ?>';

if (capa == 'accions') {
	oculta('capa_mysql','capa_accesos','capa_uso_disco','capa_ancho_banda');
	amosa('capa_accions');
} else if (capa == 'accesos') {
	oculta('capa_mysql','capa_accions','capa_uso_disco','capa_ancho_banda');
	amosa('capa_accesos');
} else if (capa == 'uso_disco') {
	oculta('capa_mysql','capa_accions','capa_accesos','capa_ancho_banda');
	amosa('capa_uso_disco');
} else if (capa == 'ancho_banda') {
	oculta('capa_mysql','capa_accions','capa_accesos','capa_uso_disco');
	amosa('capa_ancho_banda');
}

function cambia_executa () {
	document.getElementById('executa').value = opc;
}

//--></script>
