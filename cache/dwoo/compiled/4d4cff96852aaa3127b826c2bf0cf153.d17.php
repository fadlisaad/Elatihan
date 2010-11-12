<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div class='notification failure'><p>Kursus yang anda pilih telah ada dalam <a href='keterangan-pendaftaran'>senarai kursus berdaftar</a> anda</p></div>Sila pilih kursus lain. Klik pada pautan Kursus Berjadual pada menu sebelah kanan ini.<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>