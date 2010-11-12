<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!-- Page layout: Default -->

<h2>Halaman Pengguna</h2>

<p><?php echo theme_view('ts/login-user/user');?></p><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>