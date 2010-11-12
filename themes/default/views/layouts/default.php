<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	{theme_view('metadata')}
</head>

<body id="top" class='fullwidth'>
	
	<div class="wrapper" id="wrapper_head">
		{theme_view('header')}
	</div>
	<p>&nbsp;</p>
	<div class="wrapper" id='wrapper_main'>
		{theme_view('content')}
	</div>
	
	<div class="wrapper" id="wrapper_footer">
		{theme_view('footer')}
	</div>
<?php if (get_instance()->settings->item('google_analytic')):
		get_instance()->settings->item('google_analytic');
		get_instance()->load->view('fragments/google_analytic');
	endif; ?>
</body>
</html>	