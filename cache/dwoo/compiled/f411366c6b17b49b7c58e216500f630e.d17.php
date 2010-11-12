<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo theme_view('metadata');?>

</head>

<body id="top">
	
	<div class="wrapper" id="wrapper_head">
		<?php echo theme_view('header');?>

	</div>

	<div class="wrapper" id="wrapper_main">
		<div class="center">
			<div id="main">
				<div class="content">
					<div class="entry">
						<h1 class='siteheading'><?php echo $this->scope["template"]["title"];?></h1>
						<div class="entry-head">
							<span class="categories"><div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: article</p>
<p>Filename: layouts/news.php</p>
<p>Line Number: 20</p>

</div><div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Trying to get property of non-object</p>
<p>Filename: layouts/news.php</p>
<p>Line Number: 20</p>

</div><div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Trying to get property of non-object</p>
<p>Filename: layouts/news.php</p>
<p>Line Number: 20</p>

</div><div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: article</p>
<p>Filename: layouts/news.php</p>
<p>Line Number: 20</p>

</div><div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Trying to get property of non-object</p>
<p>Filename: layouts/news.php</p>
<p>Line Number: 20</p>

</div><div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Trying to get property of non-object</p>
<p>Filename: layouts/news.php</p>
<p>Line Number: 20</p>

</div><a href="http://elearn.mardi.gov.my/news/category">http://elearn.mardi.gov.my/news/category</a></span>
							<span class="date">Terakhir dikemaskini pada </span>
							<span class="categories">&nbsp;<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: article</p>
<p>Filename: layouts/news.php</p>
<p>Line Number: 22</p>

</div><div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Trying to get property of non-object</p>
<p>Filename: layouts/news.php</p>
<p>Line Number: 22</p>

</div>01 Jan 1970&nbsp;</span>
						</div>
						<div class="entry-content">
								<?php echo $this->scope["template"]["body"];?>

						</div>
						<div class='hr'><a href="#top" class="scrollTop">atas</a>
						</div>
					</div>
				</div> 
				<?php echo theme_view('sidebar');?>

			</div>
		<!--end box-->
				
		</div>
		
	</div>
	<!--end center-->
	<!-- start footer -->
	<div class="wrapper" id="wrapper_footer">
		<?php echo theme_view('footer');?>

	</div>
	<!-- end footer -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4727712-28']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
  })();

</script></body>
</html>	<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>