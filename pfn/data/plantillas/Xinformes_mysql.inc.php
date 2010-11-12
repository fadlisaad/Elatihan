<?php
/****************************************************************************
* data/plantillas/Xinformes_mysql.inc.php
*
* plantilla para la visualizaci�n del informe de errores de MySQL
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

defined('OK') && defined('XESTION') or die();
?>
				<strong><?php echo $PFN_conf->t('Xdesc_mysql'); ?></strong><br /><br />
				<label for="my_lineas"><?php echo $PFN_conf->t('Xamosar_lineas'); ?>:</label>
				<input type="text" name="my_lineas" id="my_lineas" value="<?php echo $my_lineas; ?>" size="5" /><br /><br />
				<label for="my_buscar"><?php echo $PFN_conf->t('Xbuscar_texto'); ?>:</label>
				<input type="text" name="my_buscar" id="my_buscar" value="<?php echo $PFN_vars->post('my_buscar'); ?>" size="20" />
