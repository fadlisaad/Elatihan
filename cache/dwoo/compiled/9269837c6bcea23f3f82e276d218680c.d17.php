<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo theme_view('metadata');?>

</head>

<body id="top">
    
	<div class="wrapper" id="wrapper_head">
		<?php echo theme_view('header');?>

	</div>
	<p>&nbsp;</p>
	<div class="wrapper" id="wrapper_main">
		<div class="center">
			<div id="main">
				<div class="content">
					<div class="entry">
					    <?php echo theme_view('partials/notices');?>

						<h1 class='siteheading'><?php echo $this->scope["template"]["title"];?></h1>
						<div class="entry-content">
							<?php echo $this->scope["template"]["body"];?>

						</div>
						<div class='hr'><a href="#top" class="scrollTop">atas</a>
						</div>
					</div>
				</div> 
				<?php echo theme_view('sidebar');?>

				<?php echo widget_area('side-right');?>

			</div>
		</div>
	</div>
	
	<div class="wrapper" id="wrapper_footer">
		<?php echo theme_view('footer');?>

	</div>
	
</body>
</html><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>