<?php
/****************************************************************************
* data/plantillas/login.inc.php
*
* plantilla para la visualizaci�n de la pantalla de login
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

<h1 id="benvido"><?php echo $PFN_conf->t('benvido'); ?></h1>
<?php if ($PFN_vars->get('erro')) { ?>
<div class="aviso" style="width: 230px; text-align: center; margin-left: 250px;"><?php echo $PFN_conf->t('alerta_login'); ?></div>
<?php } ?>
<div id="login">
	<form action="comprobar.php" method="post" id="formulario">
	<fieldset>
	<p><label for="login_usuario"><?php echo $PFN_conf->t('usuario'); ?>:</label>
	<br /><input type="text" id="login_usuario" name="login_usuario" class="formulario" /></p>
	<p><label for="login_contrasinal"><?php echo $PFN_conf->t('contrasinal'); ?>:</label>
	<br /><input type="password" id="login_contrasinal" name="login_contrasinal" class="formulario" /></p>
	<p><input type="submit" name="Submit" value=" <?php echo $PFN_conf->t('enviar'); ?> " class="boton" /></p>
	</fieldset>
	</form>
	<script type="text/javascript"><!--

	document.getElementById('login_usuario').focus();

	//--></script>
</div>
<p id="login_olvido_contrasinal"><a href="contrasinal.php"><?php echo $PFN_conf->t('contrasinal_olvidada'); ?></a></p>
