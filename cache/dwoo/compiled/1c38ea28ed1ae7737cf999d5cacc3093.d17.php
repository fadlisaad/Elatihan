<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!-- Page layout: Default -->

<h2>Peta Laman</h2>

<p><?php echo theme_view('sitemap');?></p>
<p>&nbsp;</p><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>