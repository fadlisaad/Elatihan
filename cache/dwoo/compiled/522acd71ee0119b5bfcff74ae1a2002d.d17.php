<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!-- Page layout: Default -->

<h2>Halaman Utama</h2>

<p>&nbsp;</p><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>