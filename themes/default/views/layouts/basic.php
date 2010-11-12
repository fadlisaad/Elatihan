<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
{theme_view('metadata')}
</head>

<body id="top">
    
	<div class="wrapper" id="wrapper_head">
		{theme_view('header')}
	</div>
	<p>&nbsp;</p>
	<div class="wrapper" id="wrapper_main">
		<div class="center">
			<div id="main">
				<div class="content">
					<div class="entry">
					    {theme_view('partials/notices')}
						<h1 class='siteheading'>{$template.title}</h1>
						<div class="entry-content">
							{$template.body}
						</div>
						<div class='hr'><a href="#top" class="scrollTop">atas</a>
						</div>
					</div>
				</div> 
				{theme_view('sidebar')}
				{widget_area('side-right')}
			</div>
		</div>
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