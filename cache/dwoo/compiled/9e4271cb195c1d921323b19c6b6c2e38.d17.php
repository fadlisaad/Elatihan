<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!-- Page layout: Default -->

<h2>Keterangan Pendaftaran</h2>

<?php echo theme_view('ts/login-user/user-kursus');
 /* end template body */
return $this->buffer . ob_get_clean();
?>