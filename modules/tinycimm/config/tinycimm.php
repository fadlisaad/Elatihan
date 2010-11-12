<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

// controllers

if($GLOBALS['CFG']->config['index_page'] != '') $index = $GLOBALS['CFG']->config['index_page']."/"; 
else $index = "";

$config['tinycimm_image_controller'] = BASE_URI.$index.'admin/tinycimm/'; // as a uri segment
$config['tinycimm_link_controller'] = BASE_URI.$index.'admin/tinycimm/link_manager/'; // as a uri segment

// views
$config['tinycimm_views_root'] = 'tinycimm/';
$config['tinycimm_views_root_image'] = 'image/';
$config['tinycimm_views_root_link'] = 'link/';

// these two directories need to have write permissions
$config['tinycimm_asset_path'] = APPPATH_URI.'uploads/assets/';
$config['tinycimm_asset_cache_path'] = APPPATH_URI.'uploads/assets/cache/';

$config['tinycimm_asset_path_full'] = realpath(APPPATH).'/uploads/assets/';
$config['tinycimm_asset_cache_path_full'] = realpath(APPPATH).'/uploads/assets/cache/';

// set to either 0777 or 0755 depending on your server setup
$config['tinycimm_asset_path_chmod'] = '0777';

// image upload config
$config['tinycimm_image_upload_config']['field_name'] = 'fileupload';
$config['tinycimm_image_upload_config']['upload_path'] = $config['tinycimm_asset_path_full'];
$config['tinycimm_image_upload_config']['allowed_types'] = 'pdf|gif|jpg|png';
$config['tinycimm_image_upload_config']['max_size'] = '6800000';
$config['tinycimm_image_upload_config']['max_width']  = '5000';
$config['tinycimm_image_upload_config']['max_height']  = '5000';

// media upload config 
$config['tinycimm_media_upload_config']['field_name'] = 'fileupload';
$config['tinycimm_media_upload_config']['upload_path'] = $config['tinycimm_asset_path_full'];
$config['tinycimm_media_upload_config']['allowed_types'] = 'flv|mov|mp3|pdf';
$config['tinycimm_media_upload_config']['max_size'] = '6800000';

// image resize
$config['tinycimm_image_resize_config']['image_library'] = 'GD2';
$config['tinycimm_image_resize_config']['maintain_ratio'] = TRUE;
$config['tinycimm_image_resize_config']['create_thumb'] = FALSE;
$config['tinycimm_image_resize_config']['width'] = 800;
$config['tinycimm_image_resize_config']['height'] = 600;
$config['tinycimm_image_resize_config']['quality'] = 90;
$config['tinycimm_image_resize_config']['default_initial_width'] = 300;

// thumbnails
$config['tinycimm_image_thumbnail_default_width'] = 200;
$config['tinycimm_image_thumbnail_default_height'] = 200;
$config['tinycimm_image_thumbnail_default_lightbox_class'] = 'lightbox';
$config['tinycimm_image_thumbnail_default_lightbox_gallery'] = 'lightbox';

// list view pagination
$config['tinycimm_pagination_per_page_thumbnails'] = 9;
$config['tinycimm_pagination_per_page_listing'] = 18;
