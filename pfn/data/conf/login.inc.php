<?php
/****************************************************************************
* data/conf/login.inc.php
*
* Contiene las variables de configuraci�n para el acceso al PHPfileNavigator
*

PHPfileNavigator versi�n 1.6.4

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

/* Carga la configuracion para acceso */
/* Load default login configuration */
return array(
	// Nombre del campo usuario / User field name
	'login:usuario' => 'login_usuario',

	// Nombre del campo de contrase�a / Password field name
	'login:contrasinal' => 'login_contrasinal',

	// Si la contrase�a se recibe ya encriptada o si debemos encriptarla antes
	// de realizar la comprobaci�n de login
	// If the password it's encripted or if pfn must crypted after check user
	// true = it's encripted | false = pfn must crypt
	'login:encriptada' => false,

	// Metodo para obtener los datos / Method to obtain data
	// post | get | session | server
	'login:metodo' => 'post'
);
?>
