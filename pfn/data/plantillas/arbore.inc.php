<?php
/****************************************************************************
* data/plantillas/arbore.inc.php
*
* plantilla para la visualizaci�n del �rbol de directorios
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

defined("OK") or die();
?>
<div id="ver_info">
	<div class="bloque_info"><h1><?php echo $PFN_conf->t('accion').' &raquo; '.$PFN_conf->t('arbore'); ?></h1></div>
	<div class="bloque_info" style="float: right;">
		<?php if ($PFN_vars->get('completo')) { ?>
			<a href="<?php echo PFN_quita_url('completo'); ?>"><?php echo $PFN_conf->t('so_directorios'); ?></a>
			&nbsp;&nbsp;|&nbsp;&nbsp;
			[<?php echo $PFN_conf->t('arbore_completo'); ?>]
		<?php } else { ?>
			[<?php echo $PFN_conf->t('so_directorios'); ?>]
			&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="<?php echo PFN_cambia_url('completo','true'); ?>"><?php echo $PFN_conf->t('arbore_completo'); ?></a>
		<?php } ?>
	</div>

	<div class="bloque_info">
		<?php echo $PFN_arbore->cnt('dir').' '.$PFN_conf->t('dirs'); ?>
		<?php if ($PFN_vars->get('completo')) { ?>
			&nbsp;&nbsp;|&nbsp;&nbsp;
			<?php echo $PFN_arbore->cnt('arq').' '.$PFN_conf->t('arqs'); ?>
			&nbsp;&nbsp;|&nbsp;&nbsp;
			<?php echo $PFN_conf->t('peso').' '.PFN_peso($PFN_arbore->cnt('peso')); ?>
		<?php } ?>
	</div>

	<div class="bloque_info"><?php echo $PFN_arbore->arbore_txt; ?></div>
</div>
