<?php
/****************************************************************************
* data/plantillas/menu.inc.php
*
* plantilla para la visualizaci�n del menu de selecci�n de ra�z
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

defined('OK') or die();
?>
<h1 id="cab_menu"> <?php echo $PFN_conf->t('PFN'); ?> </h1>
<div id="menu_raices">
	<?php echo $PFN_conf->t('listado_menu'); ?>
	<ul>
	<?php
	for (; $PFN_usuarios->mais(); $PFN_usuarios->seguinte()) {
		$ultima = $PFN_usuarios->get('id');
		echo '<li><a href="navega.php?'.PFN_cambia_url('id', $PFN_usuarios->get('id'),	false).'">'.$PFN_usuarios->get('nome').'</a></li>';
	}
	?>
	</ul>
</div>
<div id="pe_menu"><a href="sair.php?id=<?php echo $ultima; ?>&amp;<?php echo PFN_get_url(false); ?>"><?php echo $PFN_conf->t('sair'); ?></a></div>
