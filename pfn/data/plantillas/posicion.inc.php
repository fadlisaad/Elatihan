<?php
/****************************************************************************
* data/plantillas/posicion.inc.php
*
* plantilla para la visualizaci�n de la posici�n actual en la navegaci�n
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

defined('OK') or die();
?>
<div id="utilidades_superior">
	<div id="navegacion">
<?php
echo $PFN_conf->t('estasen').'&nbsp;';

$acum = '';
$partes = explode('/', $dir);

foreach ($partes as $k => $v) {
	if (!empty($v)) {
		$acum .= "$v/";

		if ($v == '.') {
			echo ' <a href="navega.php?'.PFN_cambia_url('dir','.',false).'">'.$PFN_conf->t('comezo').'</a> /';
		} else {
			echo ' <a href="navega.php?'.PFN_cambia_url('dir',substr($acum,0,-1),false).'">'.$v.'</a> /';
		}
	}
}
?>
	</div>
	<?php if (!empty($menu_opc['buscador'])) { ?>
	<script type="text/javascript"><!--

	function envia_busca (obx_form) {
		obx_palabra = obx_form.palabra_buscar.value;

		if (obx_palabra == "" || obx_palabra == "<?php echo $PFN_conf->t('busca'); ?>") {
			return false;
		}

		return true;
	}

	//--></script>
	<div id="buscador">
		<form id="busca_simple" action="<?php echo $menu_opc['buscador']; ?>" method="post" onsubmit="return envia_busca(this);">
		<fieldset>
		<input type="hidden" name="executa" value="true" />
		<input type="hidden" name="campos_buscar[]" value="nome" />
		<input type="hidden" name="donde_buscar" value="2" />
		<input type="text" name="palabra_buscar" id="palabra_buscar" value="<?php echo $PFN_conf->t('busca'); ?>" onfocus="this.value='';" />
		<input type="image" name="submit" src="<?php echo $PFN_conf->g('estilo'); ?>imx/buscar.png" style="border: 0;" />
		</fieldset>
		</form>
	</div>
	<?php } ?>
</div>
<br class="nada" />
