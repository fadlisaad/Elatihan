<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = 'pages';
$route['scaffolding_trigger'] = '';

$route['admin/([a-zA-Z_-]+)/(:any)'] = "$1/admin/$2";
$route['admin/(login|logout)'] = "admin/$1";
$route['admin/([a-zA-Z_-]+)'] = "$1/admin/index";

$route['register'] = "users/register";

$route['user/(:any)'] = "users/profile/view/$1";
$route['my-profile'] = "users/profile/index";
$route['edit-profile'] = "users/profile/edit";
$route['edit-settings'] = "users/user_settings/edit";

$route['pengesahan/(:any)'] = "kursus/pengesahan/$1";

// This is a feature of Modular Separation that sends all 404 to pages module to be handled
$route['404'] = 'pages';
?>