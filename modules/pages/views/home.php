<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	{theme_view('metadata')}
</head>

<body id="top">
	
	<div class="wrapper" id="wrapper_head">
		{theme_view('header')}
	</div>
	
	<div class="wrapper" id='wrapper_featured_area'>
		{theme_view('feature')}
	</div>
	
	 <div class="wrapper" id='wrapper_main'>
		{theme_view('feature-main')}
	</div>
	
	<div class="wrapper" id="wrapper_footer">
		{theme_view('footer')}
	</div>

	{if $ci->settings->item('google_analytic')}
		{$ci->load->view('fragments/google_analytic')}
	{/if}
</body>
</html>	