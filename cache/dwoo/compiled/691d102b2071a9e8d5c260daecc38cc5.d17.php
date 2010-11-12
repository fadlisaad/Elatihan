<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><p>&nbsp;</p>
<div class="wrapper" id='wrapper_featured_area'>
	<?php echo theme_view('feature');?>

</div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>