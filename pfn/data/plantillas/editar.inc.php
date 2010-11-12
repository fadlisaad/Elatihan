<?php
/****************************************************************************
* data/plantillas/editar.inc.php
*
* plantilla para la edici�n de un fichero
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
		<div class="bloque_info"><h1><?php echo $PFN_conf->t('accion').' &raquo; '.$PFN_conf->t('editar'); ?></h1></div>
		<div style="width: 100%; text-align: center;">
			<script type="text/javascript"><!--

			function cubre_texto2 () {
				document.getElementById('texto2').value = document.getElementById('texto').value;
				return submitonce();
			}

			//--></script>

			<form id="form_tamano" action="accion.php?<?php echo PFN_cambia_url(array('accion','cal'),array('editar',$cal),false); ?>" method="post" onsubmit="return cubre_texto2();">
			<fieldset>
			<label for="ancho"><?php echo $PFN_conf->t('tamano'); ?>:</label>
			<input type="text" id="ancho" name="ancho" value="<?php echo $editar_ancho; ?>" style="width: 50px;" />
			&nbsp;x&nbsp;
			<input type="text" id="alto" name="alto" value="<?php echo $editar_alto; ?>" style="width: 50px;" />
			&nbsp;&nbsp;
			<input type="submit" name="cambiar_tamano" value="<?php echo $PFN_conf->t('enviar'); ?>" />
			<input type="hidden" name="texto2" id="texto2" value="" />
			</fieldset>
			</form>
			<form id="form_datos" action="accion.php?<?php echo PFN_cambia_url('accion','editar',false); ?>" method="post" onsubmit="return submitonce();">
			<fieldset>
			<input type="hidden" name="executa" value="true" />
			<input type="hidden" name="cal" value="<?php echo $cal; ?>" />
			<br />
			<textarea id="texto" name="texto" style="width: <?php echo $editar_ancho; ?>px; height: <?php echo $editar_alto; ?>px"><?php echo $texto; ?></textarea>
			<p><br />
			<input type="reset" value=" <?php echo $PFN_conf->t('cancelar'); ?> " class="boton" onclick="enlace('navega.php?<?php echo PFN_get_url(false); ?>');" />
			<input type="submit" value=" <?php echo $PFN_conf->t('aceptar'); ?> " class="boton" style="margin-left: 40px;" />
			</p>
			</fieldset>
			</form>
		</div>
	</div>
</div>
