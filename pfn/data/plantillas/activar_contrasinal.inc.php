<?php
/****************************************************************************
* data/plantillas/activar_contrasinal.inc.php
*
* plantilla para la visualizaci�n de la pantalla de activacion de la nueva
* contrase�a
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

<h1 id="benvido"><?php echo $PFN_conf->t('novo_contrasinal'); ?></h1>
<div class="aviso" style="width: 230px; text-align: center; margin-left: 250px;"><?php echo $txt_erro; ?></div>
<?php if ($ok !== 1) { ?>
<div id="login">
	<form action="activar_contrasinal.php" method="post" id="formulario">
	<fieldset>
	<input type="hidden" name="executa" value="true" />
	<p><label for="activar_usuario"><?php echo $PFN_conf->t('usuario'); ?>:</label>
	<br /><input type="text" id="activar_usuario" name="activar_usuario" class="formulario" /></p>
	<p><label for="activar_contrasinal"><?php echo $PFN_conf->t('novo_contrasinal'); ?>:</label>
	<br /><input type="password" id="activar_contrasinal" name="activar_contrasinal" class="formulario" /></p>
	<p><input type="submit" name="Submit" value=" <?php echo $PFN_conf->t('enviar'); ?> " class="boton" /></p>
	</fieldset>
	</form>
	<script type="text/javascript"><!--

	document.getElementById('activar_usuario').focus();

	//--></script>
</div>
<?php } ?>
<p id="login_olvido_contrasinal"><a href="index.php"><?php echo $PFN_conf->t('voltar'); ?></a></p>
