<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo theme_view('metadata') ?>
</head>

<body id="top">
    
	<div class="wrapper" id="wrapper_head">
		<?php echo theme_view('header') ?>
	</div>
	
	<div class="wrapper" id="wrapper_main">
		<div class="center">
			<div id="main">
				<div class="content">
					<div class="entry">
					    <?php echo theme_view('partials/notices') ?>
						<h1 class='siteheading'><?php echo $template->title ?></h1>
						<div class="entry-content">
							<?php echo $template->body ?>
						</div><p><a href="javascript:history.back(1)"><< kembali</a></p>
						<div class='hr'><a href="#top" class="scrollTop">atas</a>
						</div>
					</div>
				</div> 
				<?php echo theme_view('sidebar') ?>
				<?php echo widget_area('side-right') ?>
			</div>
		</div>
	</div>
	
	<div class="wrapper" id="wrapper_footer">
		<?php echo theme_view('footer') ?>
	</div>
{if $ci->settings->item('google_analytic')}
		{$ci->load->view('fragments/google_analytic')}
	{/if

</body>
</html>