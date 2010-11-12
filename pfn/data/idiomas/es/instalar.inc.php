<?php
/****************************************************************************
* data/idiomas/es/instalar.inc.php
*
* Textos para el idioma Spanish
*

PHPfileNavigator versión 2.3.0

Copyright (C) 2004-2005 Lito <lito@eordes.com>

http://phpfilenavigator.litoweb.net/

Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los
términos de la Licencia Pública General de GNU según es publicada por la Free
Software Foundation, bien de la versión 2 de dicha Licencia o bien (según su
elección) de cualquier versión posterior.

Este programa se distribuye con la esperanza de que sea útil, pero SIN NINGUNA
GARANTÍA, incluso sin la garantía MERCANTIL implícita o sin garantizar la
CONVENIENCIA PARA UN PROPÓSITO PARTICULAR. Véase la Licencia Pública General de
GNU para más detalles.

Debería haber recibido una copia de la Licencia Pública General junto con este
programa. Si no ha sido así, escriba a la Free Software Foundation, Inc., en
675 Mass Ave, Cambridge, MA 02139, EEUU.
*******************************************************************************/

defined('OK') or die();

return array(
	'benvido' => 'Bienvenido al instalador de PHPfileNavigator',
	'i:presentacion' => 'Presentaciï¿½n',
	'i:directorios' => 'Permisos de directorios',
	'i:comprobacion' => 'Comprobaciï¿½n del sistema',
	'i:datos' => 'Datos de configuraciï¿½n',
	'i:instalar' => 'Instalar',
	'i:remate' => 'Completado',
	'i:intro_presentacion' => '<p>Bienvenido al PHPfileNavigator.</p><br /><p>Este instalador te guiarï¿½ a travï¿½s de los pasos necesarios para llevar a cabo una instalaciï¿½n correcta de la aplicaciï¿½n.</p><br /><p>Como bien sabes, este es un potente, funcional y seguro administrador de ficheros en linea con una gran cantidad de posibilidades adicionales que puedes consultar en la web oficial <a href="http://pfn.sourceforge.net/">http://pfn.sourceforge.net/</a>.</p>',
	'i:intro_escolle_idioma' => '<p>Primero debes seleccionar el <strong>idioma</strong> en el que deseas realizar la instalaciï¿½n. En caso de que el idioma que necesitas no se encuentra en este listado, puedes acceder a la secciï¿½n de descargas en la web oficial para comprobar si existe una traducciï¿½n. La traducciï¿½n que te descargues puedes instalarla cuando quieras, no tiene por que ser ahora.</p>',
	'idioma' => 'Idioma',
	'i:intro_tipo_instalacion' => '<p>Ahora esoge el tipo de instalaciï¿½n que deseas realizar. Si el PHPfileNavigator no ha sido instalado con anterioridad selecciona la opciï¿½n de <strong>instalar</strong>, en caso contrario selecciona la opciï¿½n de <strong>actualizar</strong>.</p><br /><p>Ten en cuenta que si seleccionas instalar desde cero y ya existe una instalaciï¿½n previa, eliminarï¿½ todo el contenido de las tablas MySQL de la instalaciï¿½n anterior.</p>',
	'tipo_instalacion' => 'Tipo de instalaciï¿½n',
	'instalar_cero' => 'Instalaciï¿½n desde cero o reinstalaciï¿½n de esta versiï¿½n',
	'i:actualizar' => 'Actualizar deste una versiï¿½n anterior',
	'i:intro_actualizar' => 'Se va a proceder con la actualizaciï¿½n de su instalaciï¿½n actual. Si detecta algï¿½n problema en este proceso, por favor deje un mensaje en el foro oficial <a href="http://pfn.sourceforge.net/phpBB2/" onclick="window.open(this.href); return false;">http://pfn.sourceforge.net/phpBB2/</a> para que pueda ser corregido lo antes posible.',
	'continuar_paso_2' => 'Continuar al paso 2 &raquo;',
	'continuar_paso_3' => 'Continuar al paso 3 &raquo;',
	'continuar_paso_4' => 'Continuar al paso 4 &raquo;',
	'continuar_paso_5' => 'Instalar &raquo;',
	'continuar_paso_6' => 'Finalizar &raquo;',
	'voltar_paso_1' => '&laquo; Regresar al paso 1',
	'voltar_paso_2' => '&laquo; Regresar al paso 2',
	'voltar_paso_3' => '&laquo; Regresar al paso 3',
	'i:intro_directorios' => '<p>En este paso se realizarï¿½n una serie de comprobaciones para verificar que los directorios tienen los permisos correctos.</p><br /><p>Lo ideal para los permisos de los directorios serï¿½a que solo el servidor web tenga permisos de lectura, escritura y ejecuciï¿½n (700 apache:nobody), aunque esto no serï¿½ posible en un alojamiento compartido por lo que tendrï¿½s que usar 777.',
	'i:path_ok' => 'El directorio tiene los permisos correctos.',
	'i:path_erro' => 'El directorio no tiene los permisos correctos. El usuario del servidor web debe tener permisos de escritura.',
	'i:arq_ok' => 'El fichero tiene los permisos correctos.',
	'i:arq_erro' => 'El fichero no tiene los permisos correctos. El usuario del servidor web debe tener permisos de escritura.',
	'i:intro_comprobacion' => '<p>En este paso se verifica que el servidor cumple con todos los requisitos necesarios para la instalaciï¿½n.</p><br /><p>En las comprobaciones se revisa la versiï¿½n de PHP (> 4.0.6), MySQL (>= 4.0.0), GD, lï¿½mite de memoria y capacidad para subida de ficheros.</p>',
	'i:instalado_ok' => 'La versiï¿½n instalada es correcta:',
	'i:instalado_erro' => 'La versiï¿½n instalada es inferior a la necesaria para un correcto uso de la aplicaciï¿½n, por lo que no se puede continuar con la instalaciï¿½n:',
	'i:instalado_aviso' => 'La versiï¿½n instalada es inferior a la necesaria para un perfecto uso de la aplicaciï¿½n, pero no impide su correcto funcionamiento:',
	'i:mysql_erro' => 'Esta instalaciï¿½n de PHP no incluye soporte para MySQL. Debes instalar los mï¿½dulos necesarios o recompilar el PHP para aï¿½adirle el soporte.',
	'i:gd_erro' => 'Esta instalaciï¿½n de PHP no incluye soporte para las librerï¿½as grï¿½ficas GD. Debes instalar los mï¿½dulos necesarios o recompilar el PHP para aï¿½adirle el soporte.',
	'i:safe_mode_erro' => 'Este servidor estï¿½ configurado como safe_mode = On con lo que tendrï¿½s problemas a la hora de realizar acciones con ficheros o directorios ya que los permisos no serï¿½n los adecuados. Consulta a tu proveedor de hosting para solictar el cambio a safe_mode = Off.',
	'i:safe_mode_ok' => 'La configuraciï¿½n del servidor es correcta para safe_mode = Off.',
	'i:upload_ok' => 'La configuraciï¿½n del servidor permite una buena capacidad de subida (mï¿½s de 10 Megas por fichero):',
	'i:upload_erro' => 'La configuraciï¿½n del servidor no permite una una buena capacidad de subida (menos de 10 Megas por fichero):',
	'i:memory_ok' => 'La configuraciï¿½n del servidor permite hacer uso de gran cantidad de memoria lo que acelerarï¿½ procesos como la copia reducida de imï¿½genes o la compresiï¿½n de ficheros y directorios:',
	'i:memory_erro' => 'La configuraciï¿½n del servidor no permite hacer uso de gran cantidad de memoria lo que relentizarï¿½ procesos como la copia reducida de imï¿½genes o la compresiï¿½n de ficheros y directorios:',
	'i:zlib_erro' => 'Esta versiï¿½n de PHP no dispone de soporte para Zlib por lo que darï¿½ errores a la hora de extraer, ver contenido o comprimir ficheros. Para evitar estos errores desactiva la extracciï¿½n, compresiï¿½n y visualizaciï¿½n de ficheros comprimidos.',
	'i:intro_datos' => '<p>Esta es la ï¿½ltima pantalla antes de realizar la instalaciï¿½n.</p><br /><p><strong>Todos los campos son obligatorios.</strong></p><br /><p>Si tienes dudas sobre como debes cubrir algï¿½n campo, pulsa el <a href="#">(?)</a> que se encuentra a su izquierda.</p>',
	'i:axuda' => array(
		'charset' => 'Normalmente cada idioma tiene su propio juego de caracteres para visualizar correctamente todos los sï¿½mbolos y letras en pantalla. Lo correcto es que coincida con el servidor web y con el sistema.',
		'db_servidor' => 'El servidor en el que estï¿½ instalado el MySQL. Casi siempre <strong>localhost</strong>',
		'db_nome' => 'El nombre de la base de datos en donde serï¿½ instalado. <strong>Debe existir en el momento de la instalaciï¿½n.</strong>',
		'db_usuario' => 'El usuario mediante el cual se accederï¿½ a la base de datos. Debe tener permisos de creaciï¿½n, modificaciï¿½n y borrado de tablas en la base de datos escogida.',
		'db_contrasinal' => 'Contraseï¿½a de acceso del usuario a la base de datos escogida.',
		'db_rep_contrasinal' => 'Repetir la contraseï¿½a anterior.',
		'db_prefixo' => 'Prefijo para las tablas. Asï¿½ evitarï¿½s que se pueda sobreescribir otras ya existentes con el mismo nombre.',
		'ad_nome' => 'Nombre comï¿½n del usuario administrador. <strong>No serï¿½ el usuario de acceso</strong>.',
		'ad_usuario' => 'Usuario con el que accederï¿½ a la aplicaciï¿½n.',
		'ad_contrasinal' => 'Contraseï¿½a de acceso del usuario administrador al PHPfileNavigator.',
		'ad_rep_contrasinal' => 'Repetir la contraseï¿½a anterior.',
		'ad_correo' => 'Correo electrï¿½nico del administrador. A este correo llegarï¿½n las alertas de seguridad por intentos de instrusiï¿½n o problemas de acceso.',
		'ra_nome' => 'Nombre genï¿½rico para esta raï¿½z. Sirve para identificarla en listado de raï¿½ces y en caso de que tengas acceso a mï¿½s de una. <strong>p.e.: Raï¿½z Principal</strong> o <strong>Directorio de documentos</strong>',
		'ra_path' => 'La ruta del directorio que se va a gestionar. Debe ser la absoluta desde la raï¿½z del servidor. Despuï¿½s podrï¿½s crear mï¿½s raices de acceso.<br /><br />Recuerda que debes usar / en vez de la barra invertida tanto en sistemas Linux/Unix como en Windows que esta ruta debe acabar con una /.<br /><br />No se recomienda poner como ruta el propio directorio de instalaciï¿½n del PHPfileNavigator ni nigï¿½n subdirectorio suyo. <strong>p.e.: /var/www/html/docs/</strong> o <strong>c:/phpdev/www/docs/</strong>',
		'ra_web' => 'La ruta de acceso por web desde la raï¿½z del dominio al directorio que se va a administrar.<br /><br />Por ejemplo, si voy a administrar un directorio llamado docs y en ese directorio existe un documento como logo.png. Si yo quiero acceder a ese documento por web, escribirï¿½a http://www.midominio.com/docs/logo.png, entonces la raï¿½z web serï¿½a <strong>/docs/</strong>.',
		'ra_dominio' => 'Nombre del dominio que se va a gestionar. Sin http. <strong>p.e.: www.midominio.com</strong>',
		'raices_atopadas' => 'Se encontraron las siguientes raï¿½ces que serï¿½n configuradas.',
		'aviso' => '<p>Esta aplicaciï¿½n estï¿½ en continuo desarrollo. Si habilitas la casilla de <strong>Aviso de instalaciï¿½n</strong> se enviarï¿½ al desarrollador del PHPfileNavigator un correo de aviso de nueva instalaciï¿½n o actualizaciï¿½n en el que se remitirï¿½ ï¿½nicamente el correo electrï¿½nico del administrador y el host en el que fue instalado.</p><br /><p><strong>No se enviarï¿½ ningï¿½n tipo de informaciï¿½n personal</strong> como rutas, datos de usuario o contraseï¿½as. Esto te permitirï¿½ estar informado de las nuevas versiones o avisos de seguridad.</p><br /><p>No se enviarï¿½ en ningï¿½n caso correo no deseado ni informaciï¿½n que no sea importante.</p><br /><p>Puedes revisar el cï¿½digo de envï¿½o del correo en el fichero instalar/include/paso_5.inc.php entre las lï¿½neas 45 y 63.</p>',
	),
	'i:aviso' => 'Aviso de instalaciï¿½n',
	'i:charset' => 'Juego de caracteres',
	'i:base_datos' => 'Base de datos',
	'i:db_servidor' => 'Servidor',
	'i:db_nome' => 'Base de datos',
	'i:db_usuario' => 'Usuario',
	'i:db_contrasinal' => 'Contraseï¿½a',
	'i:db_prefixo' => 'Prefijo',
	'i:administrador' => 'Usuario administrador',
	'i:ad_nome' => 'Nombre Comï¿½n',
	'i:ad_usuario' => 'Usuario',
	'i:ad_contrasinal' => 'Contraseï¿½a',
	'i:ad_rep_contrasinal' => 'Repetir contraseï¿½a',
	'i:ad_correo' => 'Email',
	'i:raiz' => 'Raï¿½z principal',
	'i:ra_nome' => 'Nombre',
	'i:ra_path' => 'Ruta absoluta',
	'i:ra_web' => 'Ruta web',
	'i:ra_dominio' => 'Dominio',
	'i:erros' => array(
		'1' => 'Debes seleccionar un Juego de caractï¿½res correcto.',
		'2' => 'Debes cubrir el campo de Servidor para la Base de datos.',
		'3' => 'Debes cubrir el Nombre de la Base de datos a usar.',
		'4' => 'Debes cubrir el campo de Usuario de acceso a la Base de datos.',
		'5' => 'Debes cubrir el campo de Nombre Comï¿½n para el Usuario administrador.',
		'6' => 'Debes cubrir el campo de Usuario para Usuario administrador.',
		'7' => 'Debes asignarle una contraseï¿½a al Usuario administrador.',
		'8' => 'Los campos de Contraseï¿½a y Repetir contraseï¿½a deben ser iguales.',
		'9' => 'El Usuario administrador debe disponer de un correo electrï¿½nico.',
		'10' => 'La Raï¿½z principal debe de disponer de nombre.',
		'11' => 'La Raï¿½z principar debe de disponer de una Ruta absoluta.',
		'12' => 'La Raï¿½z principar debe de disponer de una Ruta web.',
		'13' => 'La Raï¿½z principar debe de disponer de un dominio de localizaciï¿½n.',
		'14' => 'El directorio de Ruta absoluta en Raï¿½z principal no existe.',
		'15' => 'El usuario indicado para Base de datos no tiene permiso de acceso.',
		'16' => 'No se ha podido usar la base de datos seleccionada.',
		'17' => 'La siguiente consulta ha dado un error:',
		'18' => 'No existe el fichero de configuraciï¿½n que indica que existe una versiï¿½n ya instalada.<br />Pruebe con una instalaciï¿½n completa en vez de una actualizaciï¿½n.',
	),
	'i:intro_instalar' => 'En esta pantalla verï¿½s reflejadas las acciones que se realizaron para la instalaciï¿½n del PHPfileNavigator.',
	'i:conexion_mysql' => 'Conexiï¿½n a MySQL',
	'i:mysql_ok' => 'La conexiï¿½n al servidor MySQL y la selecciï¿½n de la base de datos ha sido correcta.',
	'i:consultas_mysql' => 'Instalaciï¿½n de tablas',
	'i:consultas_ok' => 'Todas las tablas han sido creadas con ï¿½xito y los datos inicializados correctamente.',
	'i:consultas_erro' => 'Ha ocurrido un error cuando se ejecutaba la actualizaciï¿½n de la base de datos. Revisa la lista de errores y por favor contacta con el desarrollador del PHPfileNavigator para comunicarlo.',
	'i:creacion_directorios' => 'Creaciï¿½n de directorios',
	'i:crear_directorios_ok' => 'Todos los directorios necesarios fueron creados correctamente.<br /><br />Si esta es una actualizaciï¿½n desde una versiï¿½n anterior, puede ser que necesite eliminar ciertas carpetas. Las carpetas que debes eliminar son <strong>tmp/, <strong>data/logs/</strong> y <strong>data/info/</strong> pero solo si estï¿½n fuera de la carpeta <strong>data/servidor/</strong>.',
	'i:arq_configuracion' => 'Fichero de configuraciï¿½n',
	'i:arq_configuracion_ok' => 'El fichero de configuraciï¿½n ha sido generado correctamente. Puede ver su contenido en data/conf/basicas.inc.php',
	'i:arq_inc' => 'Ficheros de informaciï¿½n adicional',
	'i:arq_inc_ok' => 'Los ficheros usados para almacenar los datos de informaciï¿½n adicional como el tï¿½tulo y descriciï¿½n has sido movidos para un directorio propio del PHPfileNavigator con lo que se limpian y mantienen intactas las raï¿½ces existentes sin alterar su contenido con ficheros adicionales. Tambiï¿½n se han movido las imï¿½genes en miniatura.',
	'i:intro_remate' => '<p>Enhorabuena, el PHPfileNavigator ha sido instalado con ï¿½xito.</p><br /><p>Para comenzar a usar la aplicaciï¿½n <strong>debes eliminar o renombrar el directorio "instalar"</strong> o volverï¿½s a ver la pantalla de instalaciï¿½n. Despuï¿½s de eso vuelve a escribir la URL de tï¿½ instalaciï¿½n de PHPfileNavigator.</p><br /><p>Para cualquier duda o sugerencia, puedes acceder al foro oficial en <a href="http://pfn.sourceforge.net/phpBB2/" onclick="window.open(this.href); return false;">http://pfn.sourceforge.net/phpBB2/</a>, e intentarï¿½ responderte lo antes posible.</p><br /><p>Recuerda que este es una aplicaciï¿½n gratuita y de libre distribuciï¿½n y modificaciï¿½n (GPL). Si deseas que este proyecto dure por tiempo ilimitado y se continue con la correcciï¿½n de errores, nuevas funcionalidades y soporte en los foros, puedes colaborar con una donaciï¿½n que ayudarï¿½ a sostener todo el trabajo realizado y por realizar.</p><br /><p>Las donaciones se pueden realizar a travï¿½s de PayPal en los siguientes botones:</p>',
	'i:doar' => 'Donar',
	'i:doar_paypal' => 'Donar con PayPal',
	'i:doar_tarxeta' => 'Donar con tarjeta de crï¿½dito/dï¿½bito',
	'i:recargar' => 'Recargar',
	'i:tit_bloqueo_instalacion' => 'Instalaciï¿½n bloqueada',
	'i:txt_bloqueo_instalacion' => '<p>Esta instalaciï¿½n ha sido bloqueada para evitar que dos personas al mismo tiempo puedan ejecutar el instalador.</p><br /><p>Si tï¿½ eres el administrador y por lo tanto la persona que realmente realizarï¿½ la instalaciï¿½n, debes borrar el fichero de bloqueo que se encuentra en <strong>tmp/instalar.lock</strong> para las versiones anteriores a 2.3.0 del PHPfileNavigator y en <strong>data/servidor/tmp/instalar.lock</strong> para las versiones iguales o posteriores.</p><br /><p>Una vez que hayas borrado ese fichero debes ser rï¿½pido en actualizar la pï¿½gina y volver a acceder al instalador, para asï¿½ obtener los permisos necesarios para continuar.</p><br /><p>Ante cualquier duda o incidencia en este proceso o en el uso de PHPfileNavigator puedes visitar la pï¿½gina oficial <a href="http://pfn.sourceforge.net/">http://pfn.sourceforge.net/</a> y en los foros podrï¿½s encontrar soluciones a tus problemas.</p><br /><strong>Lito</strong>.',
	'i:actualizar_200-201' => 'Actualizar a versiï¿½n 2.0.1',
	'i:actualizar_201-220' => 'Actualizar a versiï¿½n 2.2.0',
	'i:actualizar_220-230' => 'Actualizar a versiï¿½n 2.3.0',
	'i:consulta' => 'Consulta',
	'i:erro' => 'Error',
	'i:reintentar' => 'Volver a intentarlo',
	'i:omitir' => 'Mi configuraciï¿½n es correcta, quiero omitir esta comprobaciï¿½n.<br />El PHPfileNavigator no funionarï¿½ correctamente si no se cumplen estos requisitos.',
	'admins' => 'Administradores',
	'i:aviso_default' => '<strong>AVISO INSTALACI&Oacute;N:</strong> En el directorio data/conf/ hai un fichero llamado "default-example.inc.php" que debe ser renombrado a default.inc.php antes de continuar con la instalaci&oacute;n.<br /><br /><strong>AVISO ACTUALIZACI&Oacute;N:</strong>Comprueba las diferencias entre los ficheros "default-example.inc.php" y tu actual "default.inc.php" y a&ntilde;ade en tu instalaci&oacute;n las diferencias que encuentres.',
);
?>