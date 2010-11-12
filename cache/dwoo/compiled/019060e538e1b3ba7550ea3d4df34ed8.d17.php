<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!-- Page layout: Default -->

<h2>Ralat 404</h2>

<p>Ralat. Halaman yang dicari tidak dijumpai. Sila klik <a title="Halaman Utama" href="<?php echo page_url(1);?>">di sini</a> untuk ke halaman utama.</p><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>