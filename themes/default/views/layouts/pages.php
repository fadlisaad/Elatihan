<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo theme_view('metadata')  ?>
</head>

<body id="top">

	<?php if($page->slug == 'home'): ?>
	<div class="wrapper" id="wrapper_head">
		<?php echo theme_view('header')  ?>
	</div>
		<?php echo theme_view('layouts/home'); ?>
	<?php else: ?>
		
	<div class="wrapper" id="wrapper_head">
		<?php echo theme_view('header')  ?>
	</div>
	<p>&nbsp;</p>
	<div class="wrapper" id="wrapper_main">
		<div class="center">
			<div id="main">
				<div class="content">
					<div class="entry">
						<div class="entry-content">
							<?php echo $template['body'] ?>
						</div><p><input name="back" value="Kembali" class="button" type="button" onclick="javascript:history.back(1)"></p>
						<div class='hr'><a href="#top" class="scrollTop">atas</a></div>
					</div>
				</div>
				<?php echo theme_view('sidebar')  ?>
			</div>
		</div>
	</div>
	<!--end box-->
	</div>
	<!--end center-->
	<?php endif; ?>
	<!-- start footer -->
	<div class="wrapper" id="wrapper_footer">
		<?php echo theme_view('footer')  ?>
	</div>
	<!-- end footer -->
<?php if (get_instance()->settings->item('google_analytic')):
		get_instance()->settings->item('google_analytic');
		get_instance()->load->view('fragments/google_analytic');
	endif; ?>
	
</body>
</html>	