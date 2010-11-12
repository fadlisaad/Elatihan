<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!-- Page layout: Default -->

<h2>Login Exec</h2>

<?php echo theme_view('ts/login-user/login-exec');
 /* end template body */
return $this->buffer . ob_get_clean();
?>