<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div class='notification information'><p>Pendaftaran anda dalam kursus ini telah diterima.Sila semak e-mail anda.</p></div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>