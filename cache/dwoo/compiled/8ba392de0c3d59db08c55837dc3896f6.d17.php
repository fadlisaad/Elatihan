<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div class='notification information'><p>Pendaftaran dalam kursus Pemeliharaan Serangga Secara Besar- Besaran (untuk kawalan biologi dan sumber protein)</p></div><table border="0" cellpadding="4" cellspacing="0">
<tr>
<th>Kod</th><th>00006</th></tr>
<tr>
<td>Kategori</td><td>Teknologi Tanaman </td></tr>
<tr>
<td>Tarikh Kursus Mula</td><td>01 Jan 1970</td></tr>
<tr>
<td>Tarikh Kursus Tamat</td><td>01 Jan 1970</td></tr>
<tr>
<td>Yuran</td><td>RM1100</td></tr>
<tr>
<td>Lokasi</td><td>Serdang</td></tr>
<tr>
<td>Jenis</td><td>Kursus Luar Jadual</td></tr>
</table>	<form method="POST" action="user-daftar-exec" name="insert" id="insert" class="ajax_form">
		<input name="peserta_id" type="hidden" value="534" />
		<input name="kursus_id" type="hidden" value="46" />
		<input name="lastupdate" type="hidden" value="2010-11-01" />

<br /><input type="submit" name="daftar" value="Sahkan Pendaftaran" id="daftar" class="button"  /></form><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>