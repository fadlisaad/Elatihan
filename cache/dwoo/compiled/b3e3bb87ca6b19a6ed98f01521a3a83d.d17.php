<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!-- Page layout: Default -->

<h2>user daftar exec</h2>

<?php echo theme_view('ts/login-user/user-daftar-exec');
 /* end template body */
return $this->buffer . ob_get_clean();
?>