<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div class='notification information'><p>Pendaftaran dalam kursus Pemprosesan Snek Bergoreng (maruku, kerepek bawang, rempeyek)</p></div><table border="0" cellpadding="4" cellspacing="0">
<tr>
<th>Kod</th><th>38051</th></tr>
<tr>
<td>Kategori</td><td>Teknologi Makanan</td></tr>
<tr>
<td>Tarikh Kursus Mula</td><td>08 Nov 2010</td></tr>
<tr>
<td>Tarikh Kursus Tamat</td><td>11 Nov 2010</td></tr>
<tr>
<td>Yuran</td><td>RM1200</td></tr>
<tr>
<td>Lokasi</td><td>Serdang</td></tr>
<tr>
<td>Jenis</td><td>Kursus Berjadual</td></tr>
</table>	<form method="POST" action="user-daftar-exec" name="insert" id="insert" class="ajax_form">
		<input name="peserta_id" type="hidden" value="385" />
		<input name="kursus_id" type="hidden" value="203" />
		<input name="lastupdate" type="hidden" value="2010-08-11" />

<br /><input type="submit" name="daftar" value="Sahkan Pendaftaran" id="daftar" class="button"  /></form><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>