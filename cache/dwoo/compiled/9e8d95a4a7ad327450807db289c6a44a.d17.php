<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!-- Page layout: Default -->

<h2>Kaedah Pembayaran</h2>

<ul>
<li>Wang Kiriman Pos/Deraf Bank/Cek Jabatan atau Pesanan Tempatan.  Bayaran boleh dibuat atas nama DANA LATIHAN MARDI.</li>
<li>CIMBClicks (Pembayaran bil kepada MARDI-Kursus Teknikal).</li>
</ul>
<p>Bayaran hendaklah disempurnakan sebelum kursus dijalankan. Bukti  pembayaran perlu dikemukakan kepada pihak urusetia melalui penghantaran  surat, faks atau email. Pihak penganjur berhak untuk membatalkan  penyertaan sekiranya bukti pembayaran gagal diberikan.</p><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>