<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><h3>Test</h3><table border="0" cellpadding="4" cellspacing="0">
<tr>
<th>Kod</th><th>123456</th></tr>
<tr>
<td>Kategori</td><td>Teknologi Makanan</td></tr>
<tr>
<td>Sinopsis</td><td></td></tr>
<tr>
<td>Tarikh Kursus Mula</td><td>30 Nov 2010</td></tr>
<tr>
<td>Tarikh Kursus Tamat</td><td>30 Nov 2010</td></tr>
<tr>
<td>Tarikh tutup pendaftaran</td><td>30 Nov 2010</td></tr>
<tr>
<td>Yuran</td><td>RM 0.00</td></tr>
<tr>
<td>Lokasi</td><td>Tanjung Karang</td></tr>
<tr>
<td>Jenis</td><td>Kursus Berjadual</td></tr>
</table><br /><a href="http://elearn.mardi.gov.my/user-daftar" class="button">Daftar</a><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>