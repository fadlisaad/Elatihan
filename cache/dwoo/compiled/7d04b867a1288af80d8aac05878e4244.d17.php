<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div class='notification information'><p>Pendaftaran dalam kursus Pemprosesan Kordial, Jus Dan Minuman Terus Buah -	Buahan</p></div><table border="0" cellpadding="4" cellspacing="0">
<tr>
<th>Kod</th><th>33011</th></tr>
<tr>
<td>Kategori</td><td>Teknologi Makanan</td></tr>
<tr>
<td>Tarikh Kursus Mula</td><td>14 Dec 2010</td></tr>
<tr>
<td>Tarikh Kursus Tamat</td><td>16 Dec 2010</td></tr>
<tr>
<td>Yuran</td><td>RM950</td></tr>
<tr>
<td>Lokasi</td><td>Johor Bahru</td></tr>
<tr>
<td>Jenis</td><td>Kursus Berjadual</td></tr>
</table>	<form method="POST" action="user-daftar-exec" name="insert" id="insert" class="ajax_form">
		<input name="peserta_id" type="hidden" value="122" />
		<input name="kursus_id" type="hidden" value="204" />
		<input name="lastupdate" type="hidden" value="2010-10-22" />

<br /><input type="submit" name="daftar" value="Sahkan Pendaftaran" id="daftar" class="button"  /></form><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>