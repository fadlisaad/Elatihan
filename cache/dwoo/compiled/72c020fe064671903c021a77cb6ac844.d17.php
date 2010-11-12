<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!-- Page layout: Default -->

<h2>Ubah Maklumat</h2>

<?php echo theme_view('ts/login-user/user-edit');
 /* end template body */
return $this->buffer . ob_get_clean();
?>