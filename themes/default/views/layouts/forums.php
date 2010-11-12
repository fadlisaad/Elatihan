<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	{theme_view('metadata')}
</head>

<body id="top" class="fullwidth">
	
	<div class="wrapper" id="wrapper_head">
		{theme_view('header')}
	</div>

	<div class="wrapper" id="wrapper_main">
		<div class="center">
			<div id="main">
			<div id="feature_info">
					<div class="text">
						<h1>Forum</h1>
					</div>
					
				<!-- end feature_info-->
				</div>
				<div class="content">
					<div class="entry">
						<div class="entry-content">
							<p>{$template.body}</p>
						</div>
							
						<div class='hr'><a href="#top" class="scrollTop">atas</a>
						</div>
					</div>
				</div> 
			</div>
		<!--end box-->
		</div>
	</div>
	<!--end center-->
	<!-- start footer -->
	<div class="wrapper" id="wrapper_footer">
		{theme_view('footer')}
	</div>
	<!-- end footer -->
<?php if (get_instance()->settings->item('google_analytic')):
		get_instance()->settings->item('google_analytic');
		get_instance()->load->view('fragments/google_analytic');
	endif; ?>
</body>
</html>	