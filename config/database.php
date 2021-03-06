<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the "Database Connection"
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['active_r'] TRUE/FALSE - Whether to load the active record class
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the "default" group).
|
*/

// Local
$db['local']['hostname'] = "";
$db['local']['username'] = "";
$db['local']['password'] = "";
$db['local']['database'] = "";
$db['local']['dbdriver'] = "mysql";
$db['local']['dbprefix'] = "";
$db['local']['active_r'] = TRUE;
$db['local']['pconnect'] = TRUE;
$db['local']['db_debug'] = TRUE;
$db['local']['cache_on'] = FALSE;
$db['local']['cachedir'] = "";
$db['local']['char_set'] = "utf8";
$db['local']['dbcollat'] = "utf8_unicode_ci";
$db['local']['port'] 	 = 3306;

// Dev
//$db['dev']['hostname'] = "202.190.32.26";
// ...etc

// QA
//$db['qa']['hostname'] = "202.190.32.26";
// ...etc

// Live
$db['live']['hostname'] = "202.190.32.26";
$db['live']['username'] = "root";
$db['live']['password'] = "xs2mysql";
$db['live']['database'] = "mardilms";
$db['live']['dbdriver'] = "mysql";
$db['live']['dbprefix'] = "";
$db['live']['active_r'] = TRUE;
$db['live']['pconnect'] = TRUE;
$db['live']['db_debug'] = TRUE;
$db['live']['cache_on'] = FALSE;
$db['live']['cachedir'] = "";
$db['live']['char_set'] = "utf8";
$db['live']['dbcollat'] = "utf8_unicode_ci";
$db['live']['port'] 	= 3306;

// Check the configuration group in use exists
if(!array_key_exists(ENV, $db))
{
	show_error(sprintf(lang('error_invalid_db_group'), ENV));
}

// Assign the group to be used
$active_group = ENV;
