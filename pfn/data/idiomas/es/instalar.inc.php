<?php
/****************************************************************************
* data/idiomas/es/instalar.inc.php
*
* Textos para el idioma Spanish
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

return array(
	'benvido' => 'Bienvenido al instalador de PHPfileNavigator',
	'i:presentacion' => 'Presentaci�n',
	'i:directorios' => 'Permisos de directorios',
	'i:comprobacion' => 'Comprobaci�n del sistema',
	'i:datos' => 'Datos de configuraci�n',
	'i:instalar' => 'Instalar',
	'i:remate' => 'Completado',
	'i:intro_presentacion' => '<p>Bienvenido al PHPfileNavigator.</p><br /><p>Este instalador te guiar� a trav�s de los pasos necesarios para llevar a cabo una instalaci�n correcta de la aplicaci�n.</p><br /><p>Como bien sabes, este es un potente, funcional y seguro administrador de ficheros en linea con una gran cantidad de posibilidades adicionales que puedes consultar en la web oficial <a href="http://pfn.sourceforge.net/">http://pfn.sourceforge.net/</a>.</p>',
	'i:intro_escolle_idioma' => '<p>Primero debes seleccionar el <strong>idioma</strong> en el que deseas realizar la instalaci�n. En caso de que el idioma que necesitas no se encuentra en este listado, puedes acceder a la secci�n de descargas en la web oficial para comprobar si existe una traducci�n. La traducci�n que te descargues puedes instalarla cuando quieras, no tiene por que ser ahora.</p>',
	'idioma' => 'Idioma',
	'i:intro_tipo_instalacion' => '<p>Ahora esoge el tipo de instalaci�n que deseas realizar. Si el PHPfileNavigator no ha sido instalado con anterioridad selecciona la opci�n de <strong>instalar</strong>, en caso contrario selecciona la opci�n de <strong>actualizar</strong>.</p><br /><p>Ten en cuenta que si seleccionas instalar desde cero y ya existe una instalaci�n previa, eliminar� todo el contenido de las tablas MySQL de la instalaci�n anterior.</p>',
	'tipo_instalacion' => 'Tipo de instalaci�n',
	'instalar_cero' => 'Instalaci�n desde cero o reinstalaci�n de esta versi�n',
	'i:actualizar' => 'Actualizar deste una versi�n anterior',
	'i:intro_actualizar' => 'Se va a proceder con la actualizaci�n de su instalaci�n actual. Si detecta alg�n problema en este proceso, por favor deje un mensaje en el foro oficial <a href="http://pfn.sourceforge.net/phpBB2/" onclick="window.open(this.href); return false;">http://pfn.sourceforge.net/phpBB2/</a> para que pueda ser corregido lo antes posible.',
	'continuar_paso_2' => 'Continuar al paso 2 &raquo;',
	'continuar_paso_3' => 'Continuar al paso 3 &raquo;',
	'continuar_paso_4' => 'Continuar al paso 4 &raquo;',
	'continuar_paso_5' => 'Instalar &raquo;',
	'continuar_paso_6' => 'Finalizar &raquo;',
	'voltar_paso_1' => '&laquo; Regresar al paso 1',
	'voltar_paso_2' => '&laquo; Regresar al paso 2',
	'voltar_paso_3' => '&laquo; Regresar al paso 3',
	'i:intro_directorios' => '<p>En este paso se realizar�n una serie de comprobaciones para verificar que los directorios tienen los permisos correctos.</p><br /><p>Lo ideal para los permisos de los directorios ser�a que solo el servidor web tenga permisos de lectura, escritura y ejecuci�n (700 apache:nobody), aunque esto no ser� posible en un alojamiento compartido por lo que tendr�s que usar 777.',
	'i:path_ok' => 'El directorio tiene los permisos correctos.',
	'i:path_erro' => 'El directorio no tiene los permisos correctos. El usuario del servidor web debe tener permisos de escritura.',
	'i:arq_ok' => 'El fichero tiene los permisos correctos.',
	'i:arq_erro' => 'El fichero no tiene los permisos correctos. El usuario del servidor web debe tener permisos de escritura.',
	'i:intro_comprobacion' => '<p>En este paso se verifica que el servidor cumple con todos los requisitos necesarios para la instalaci�n.</p><br /><p>En las comprobaciones se revisa la versi�n de PHP (> 4.0.6), MySQL (>= 4.0.0), GD, l�mite de memoria y capacidad para subida de ficheros.</p>',
	'i:instalado_ok' => 'La versi�n instalada es correcta:',
	'i:instalado_erro' => 'La versi�n instalada es inferior a la necesaria para un correcto uso de la aplicaci�n, por lo que no se puede continuar con la instalaci�n:',
	'i:instalado_aviso' => 'La versi�n instalada es inferior a la necesaria para un perfecto uso de la aplicaci�n, pero no impide su correcto funcionamiento:',
	'i:mysql_erro' => 'Esta instalaci�n de PHP no incluye soporte para MySQL. Debes instalar los m�dulos necesarios o recompilar el PHP para a�adirle el soporte.',
	'i:gd_erro' => 'Esta instalaci�n de PHP no incluye soporte para las librer�as gr�ficas GD. Debes instalar los m�dulos necesarios o recompilar el PHP para a�adirle el soporte.',
	'i:safe_mode_erro' => 'Este servidor est� configurado como safe_mode = On con lo que tendr�s problemas a la hora de realizar acciones con ficheros o directorios ya que los permisos no ser�n los adecuados. Consulta a tu proveedor de hosting para solictar el cambio a safe_mode = Off.',
	'i:safe_mode_ok' => 'La configuraci�n del servidor es correcta para safe_mode = Off.',
	'i:upload_ok' => 'La configuraci�n del servidor permite una buena capacidad de subida (m�s de 10 Megas por fichero):',
	'i:upload_erro' => 'La configuraci�n del servidor no permite una una buena capacidad de subida (menos de 10 Megas por fichero):',
	'i:memory_ok' => 'La configuraci�n del servidor permite hacer uso de gran cantidad de memoria lo que acelerar� procesos como la copia reducida de im�genes o la compresi�n de ficheros y directorios:',
	'i:memory_erro' => 'La configuraci�n del servidor no permite hacer uso de gran cantidad de memoria lo que relentizar� procesos como la copia reducida de im�genes o la compresi�n de ficheros y directorios:',
	'i:zlib_erro' => 'Esta versi�n de PHP no dispone de soporte para Zlib por lo que dar� errores a la hora de extraer, ver contenido o comprimir ficheros. Para evitar estos errores desactiva la extracci�n, compresi�n y visualizaci�n de ficheros comprimidos.',
	'i:intro_datos' => '<p>Esta es la �ltima pantalla antes de realizar la instalaci�n.</p><br /><p><strong>Todos los campos son obligatorios.</strong></p><br /><p>Si tienes dudas sobre como debes cubrir alg�n campo, pulsa el <a href="#">(?)</a> que se encuentra a su izquierda.</p>',
	'i:axuda' => array(
		'charset' => 'Normalmente cada idioma tiene su propio juego de caracteres para visualizar correctamente todos los s�mbolos y letras en pantalla. Lo correcto es que coincida con el servidor web y con el sistema.',
		'db_servidor' => 'El servidor en el que est� instalado el MySQL. Casi siempre <strong>localhost</strong>',
		'db_nome' => 'El nombre de la base de datos en donde ser� instalado. <strong>Debe existir en el momento de la instalaci�n.</strong>',
		'db_usuario' => 'El usuario mediante el cual se acceder� a la base de datos. Debe tener permisos de creaci�n, modificaci�n y borrado de tablas en la base de datos escogida.',
		'db_contrasinal' => 'Contrase�a de acceso del usuario a la base de datos escogida.',
		'db_rep_contrasinal' => 'Repetir la contrase�a anterior.',
		'db_prefixo' => 'Prefijo para las tablas. As� evitar�s que se pueda sobreescribir otras ya existentes con el mismo nombre.',
		'ad_nome' => 'Nombre com�n del usuario administrador. <strong>No ser� el usuario de acceso</strong>.',
		'ad_usuario' => 'Usuario con el que acceder� a la aplicaci�n.',
		'ad_contrasinal' => 'Contrase�a de acceso del usuario administrador al PHPfileNavigator.',
		'ad_rep_contrasinal' => 'Repetir la contrase�a anterior.',
		'ad_correo' => 'Correo electr�nico del administrador. A este correo llegar�n las alertas de seguridad por intentos de instrusi�n o problemas de acceso.',
		'ra_nome' => 'Nombre gen�rico para esta ra�z. Sirve para identificarla en listado de ra�ces y en caso de que tengas acceso a m�s de una. <strong>p.e.: Ra�z Principal</strong> o <strong>Directorio de documentos</strong>',
		'ra_path' => 'La ruta del directorio que se va a gestionar. Debe ser la absoluta desde la ra�z del servidor. Despu�s podr�s crear m�s raices de acceso.<br /><br />Recuerda que debes usar / en vez de la barra invertida tanto en sistemas Linux/Unix como en Windows que esta ruta debe acabar con una /.<br /><br />No se recomienda poner como ruta el propio directorio de instalaci�n del PHPfileNavigator ni nig�n subdirectorio suyo. <strong>p.e.: /var/www/html/docs/</strong> o <strong>c:/phpdev/www/docs/</strong>',
		'ra_web' => 'La ruta de acceso por web desde la ra�z del dominio al directorio que se va a administrar.<br /><br />Por ejemplo, si voy a administrar un directorio llamado docs y en ese directorio existe un documento como logo.png. Si yo quiero acceder a ese documento por web, escribir�a http://www.midominio.com/docs/logo.png, entonces la ra�z web ser�a <strong>/docs/</strong>.',
		'ra_dominio' => 'Nombre del dominio que se va a gestionar. Sin http. <strong>p.e.: www.midominio.com</strong>',
		'raices_atopadas' => 'Se encontraron las siguientes ra�ces que ser�n configuradas.',
		'aviso' => '<p>Esta aplicaci�n est� en continuo desarrollo. Si habilitas la casilla de <strong>Aviso de instalaci�n</strong> se enviar� al desarrollador del PHPfileNavigator un correo de aviso de nueva instalaci�n o actualizaci�n en el que se remitir� �nicamente el correo electr�nico del administrador y el host en el que fue instalado.</p><br /><p><strong>No se enviar� ning�n tipo de informaci�n personal</strong> como rutas, datos de usuario o contrase�as. Esto te permitir� estar informado de las nuevas versiones o avisos de seguridad.</p><br /><p>No se enviar� en ning�n caso correo no deseado ni informaci�n que no sea importante.</p><br /><p>Puedes revisar el c�digo de env�o del correo en el fichero instalar/include/paso_5.inc.php entre las l�neas 45 y 63.</p>',
	),
	'i:aviso' => 'Aviso de instalaci�n',
	'i:charset' => 'Juego de caracteres',
	'i:base_datos' => 'Base de datos',
	'i:db_servidor' => 'Servidor',
	'i:db_nome' => 'Base de datos',
	'i:db_usuario' => 'Usuario',
	'i:db_contrasinal' => 'Contrase�a',
	'i:db_prefixo' => 'Prefijo',
	'i:administrador' => 'Usuario administrador',
	'i:ad_nome' => 'Nombre Com�n',
	'i:ad_usuario' => 'Usuario',
	'i:ad_contrasinal' => 'Contrase�a',
	'i:ad_rep_contrasinal' => 'Repetir contrase�a',
	'i:ad_correo' => 'Email',
	'i:raiz' => 'Ra�z principal',
	'i:ra_nome' => 'Nombre',
	'i:ra_path' => 'Ruta absoluta',
	'i:ra_web' => 'Ruta web',
	'i:ra_dominio' => 'Dominio',
	'i:erros' => array(
		'1' => 'Debes seleccionar un Juego de caract�res correcto.',
		'2' => 'Debes cubrir el campo de Servidor para la Base de datos.',
		'3' => 'Debes cubrir el Nombre de la Base de datos a usar.',
		'4' => 'Debes cubrir el campo de Usuario de acceso a la Base de datos.',
		'5' => 'Debes cubrir el campo de Nombre Com�n para el Usuario administrador.',
		'6' => 'Debes cubrir el campo de Usuario para Usuario administrador.',
		'7' => 'Debes asignarle una contrase�a al Usuario administrador.',
		'8' => 'Los campos de Contrase�a y Repetir contrase�a deben ser iguales.',
		'9' => 'El Usuario administrador debe disponer de un correo electr�nico.',
		'10' => 'La Ra�z principal debe de disponer de nombre.',
		'11' => 'La Ra�z principar debe de disponer de una Ruta absoluta.',
		'12' => 'La Ra�z principar debe de disponer de una Ruta web.',
		'13' => 'La Ra�z principar debe de disponer de un dominio de localizaci�n.',
		'14' => 'El directorio de Ruta absoluta en Ra�z principal no existe.',
		'15' => 'El usuario indicado para Base de datos no tiene permiso de acceso.',
		'16' => 'No se ha podido usar la base de datos seleccionada.',
		'17' => 'La siguiente consulta ha dado un error:',
		'18' => 'No existe el fichero de configuraci�n que indica que existe una versi�n ya instalada.<br />Pruebe con una instalaci�n completa en vez de una actualizaci�n.',
	),
	'i:intro_instalar' => 'En esta pantalla ver�s reflejadas las acciones que se realizaron para la instalaci�n del PHPfileNavigator.',
	'i:conexion_mysql' => 'Conexi�n a MySQL',
	'i:mysql_ok' => 'La conexi�n al servidor MySQL y la selecci�n de la base de datos ha sido correcta.',
	'i:consultas_mysql' => 'Instalaci�n de tablas',
	'i:consultas_ok' => 'Todas las tablas han sido creadas con �xito y los datos inicializados correctamente.',
	'i:consultas_erro' => 'Ha ocurrido un error cuando se ejecutaba la actualizaci�n de la base de datos. Revisa la lista de errores y por favor contacta con el desarrollador del PHPfileNavigator para comunicarlo.',
	'i:creacion_directorios' => 'Creaci�n de directorios',
	'i:crear_directorios_ok' => 'Todos los directorios necesarios fueron creados correctamente.<br /><br />Si esta es una actualizaci�n desde una versi�n anterior, puede ser que necesite eliminar ciertas carpetas. Las carpetas que debes eliminar son <strong>tmp/, <strong>data/logs/</strong> y <strong>data/info/</strong> pero solo si est�n fuera de la carpeta <strong>data/servidor/</strong>.',
	'i:arq_configuracion' => 'Fichero de configuraci�n',
	'i:arq_configuracion_ok' => 'El fichero de configuraci�n ha sido generado correctamente. Puede ver su contenido en data/conf/basicas.inc.php',
	'i:arq_inc' => 'Ficheros de informaci�n adicional',
	'i:arq_inc_ok' => 'Los ficheros usados para almacenar los datos de informaci�n adicional como el t�tulo y descrici�n has sido movidos para un directorio propio del PHPfileNavigator con lo que se limpian y mantienen intactas las ra�ces existentes sin alterar su contenido con ficheros adicionales. Tambi�n se han movido las im�genes en miniatura.',
	'i:intro_remate' => '<p>Enhorabuena, el PHPfileNavigator ha sido instalado con �xito.</p><br /><p>Para comenzar a usar la aplicaci�n <strong>debes eliminar o renombrar el directorio "instalar"</strong> o volver�s a ver la pantalla de instalaci�n. Despu�s de eso vuelve a escribir la URL de t� instalaci�n de PHPfileNavigator.</p><br /><p>Para cualquier duda o sugerencia, puedes acceder al foro oficial en <a href="http://pfn.sourceforge.net/phpBB2/" onclick="window.open(this.href); return false;">http://pfn.sourceforge.net/phpBB2/</a>, e intentar� responderte lo antes posible.</p><br /><p>Recuerda que este es una aplicaci�n gratuita y de libre distribuci�n y modificaci�n (GPL). Si deseas que este proyecto dure por tiempo ilimitado y se continue con la correcci�n de errores, nuevas funcionalidades y soporte en los foros, puedes colaborar con una donaci�n que ayudar� a sostener todo el trabajo realizado y por realizar.</p><br /><p>Las donaciones se pueden realizar a trav�s de PayPal en los siguientes botones:</p>',
	'i:doar' => 'Donar',
	'i:doar_paypal' => 'Donar con PayPal',
	'i:doar_tarxeta' => 'Donar con tarjeta de cr�dito/d�bito',
	'i:recargar' => 'Recargar',
	'i:tit_bloqueo_instalacion' => 'Instalaci�n bloqueada',
	'i:txt_bloqueo_instalacion' => '<p>Esta instalaci�n ha sido bloqueada para evitar que dos personas al mismo tiempo puedan ejecutar el instalador.</p><br /><p>Si t� eres el administrador y por lo tanto la persona que realmente realizar� la instalaci�n, debes borrar el fichero de bloqueo que se encuentra en <strong>tmp/instalar.lock</strong> para las versiones anteriores a 2.3.0 del PHPfileNavigator y en <strong>data/servidor/tmp/instalar.lock</strong> para las versiones iguales o posteriores.</p><br /><p>Una vez que hayas borrado ese fichero debes ser r�pido en actualizar la p�gina y volver a acceder al instalador, para as� obtener los permisos necesarios para continuar.</p><br /><p>Ante cualquier duda o incidencia en este proceso o en el uso de PHPfileNavigator puedes visitar la p�gina oficial <a href="http://pfn.sourceforge.net/">http://pfn.sourceforge.net/</a> y en los foros podr�s encontrar soluciones a tus problemas.</p><br /><strong>Lito</strong>.',
	'i:actualizar_200-201' => 'Actualizar a versi�n 2.0.1',
	'i:actualizar_201-220' => 'Actualizar a versi�n 2.2.0',
	'i:actualizar_220-230' => 'Actualizar a versi�n 2.3.0',
	'i:consulta' => 'Consulta',
	'i:erro' => 'Error',
	'i:reintentar' => 'Volver a intentarlo',
	'i:omitir' => 'Mi configuraci�n es correcta, quiero omitir esta comprobaci�n.<br />El PHPfileNavigator no funionar� correctamente si no se cumplen estos requisitos.',
	'admins' => 'Administradores',
	'i:aviso_default' => '<strong>AVISO INSTALACI&Oacute;N:</strong> En el directorio data/conf/ hai un fichero llamado "default-example.inc.php" que debe ser renombrado a default.inc.php antes de continuar con la instalaci&oacute;n.<br /><br /><strong>AVISO ACTUALIZACI&Oacute;N:</strong>Comprueba las diferencias entre los ficheros "default-example.inc.php" y tu actual "default.inc.php" y a&ntilde;ade en tu instalaci&oacute;n las diferencias que encuentres.',
);
?>