<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div class='notification information'><p>Pendaftaran dalam kursus Pembungkusan Dan Pelabelan Makanan</p></div><table border="0" cellpadding="4" cellspacing="0">
<tr>
<th>Kod</th><th>47011</th></tr>
<tr>
<td>Kategori</td><td>Teknologi Lanjutan</td></tr>
<tr>
<td>Tarikh Kursus Mula</td><td>25 Oct 2010</td></tr>
<tr>
<td>Tarikh Kursus Tamat</td><td>28 Oct 2010</td></tr>
<tr>
<td>Yuran</td><td>RM1000</td></tr>
<tr>
<td>Lokasi</td><td>Serdang</td></tr>
<tr>
<td>Jenis</td><td>Kursus Berjadual</td></tr>
</table>	<form method="POST" action="user-daftar-exec" name="insert" id="insert" class="ajax_form">
		<input name="peserta_id" type="hidden" value="485" />
		<input name="kursus_id" type="hidden" value="133" />
		<input name="lastupdate" type="hidden" value="2010-10-11" />

<br /><input type="submit" name="daftar" value="Sahkan Pendaftaran" id="daftar" class="button"  /></form><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>