<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!-- Page layout: Default -->

<h2>Log Keluar</h2>

<?php echo theme_view('ts/login-user/logout');?>

<p>Anda telah log keluar dari sistem ini. Terima kasih.</p><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>