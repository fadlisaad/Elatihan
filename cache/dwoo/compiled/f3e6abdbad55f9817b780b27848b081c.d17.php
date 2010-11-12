<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!-- Page layout: Default -->

<h2>Reset kata laluan</h2>

<?php echo theme_view('ts/login-user/reset-password-user');
 /* end template body */
return $this->buffer . ob_get_clean();
?>