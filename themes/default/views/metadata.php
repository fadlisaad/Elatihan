<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title><?php echo $template['title'] ?> | <?php echo get_instance()->settings->item('site_name') ?></title>
<link rel="shortcut icon" href="<?php echo base_url() ?>favicon.ico" />

<?php echo theme_css('style.css') ?>
<?php echo theme_css('main.css') ?>
<?php echo theme_css('prettyPhoto.css') ?>

<?php echo js('jquery/jquery.js') ?>
<?php echo js('jquery/jquery-ui.min.js') ?>
<?php echo js('jquery/jquery.prettyPhoto.js') ?>
<?php echo js('jquery/jquery.validate.js') ?>
<?php echo js('custom.js') ?>
<?php echo js('watermark-core.js') ?>
<?php echo js('watermark.js') ?>

<?php echo $template['metadata'] ?>