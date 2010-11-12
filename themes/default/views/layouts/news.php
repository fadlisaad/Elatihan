<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	{theme_view('metadata')}
</head>

<body id="top">
	
	<div class="wrapper" id="wrapper_head">
		{theme_view('header')}
	</div>

	<div class="wrapper" id="wrapper_main">
		<div class="center">
			<div id="main">
				<div class="content">
					<div class="entry">
						<h1 class='siteheading'>{$template.title}</h1>
						<div class="entry-head">
							<span class="categories"><?php echo anchor('news/category/'.$article->category->slug, $article->category->title); ?></span>
							<span class="date">Terakhir dikemaskini pada </span>
							<span class="categories">&nbsp;<?php echo date('d M Y', $article->updated_on); ?>&nbsp;</span>
						</div>
						<div class="entry-content">
								{$template.body}
						</div>
						<div class='hr'><a href="#top" class="scrollTop">atas</a>
						</div>
					</div>
				</div> 
				{theme_view('sidebar')}
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