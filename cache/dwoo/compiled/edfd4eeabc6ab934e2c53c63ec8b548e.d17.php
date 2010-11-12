<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div class='notification information'><p>Pendaftaran dalam kursus Pemprosesan Hasilan Makanan Sejuk Beku (pau, karipaf, kasturi)</p></div><table border="0" cellpadding="4" cellspacing="0">
<tr>
<th>Kod</th><th>39021</th></tr>
<tr>
<td>Kategori</td><td>Teknologi Makanan</td></tr>
<tr>
<td>Tarikh Kursus Mula</td><td>19 Oct 2010</td></tr>
<tr>
<td>Tarikh Kursus Tamat</td><td>21 Oct 2010</td></tr>
<tr>
<td>Yuran</td><td>RM900</td></tr>
<tr>
<td>Lokasi</td><td>Serdang</td></tr>
<tr>
<td>Jenis</td><td>Kursus Berjadual</td></tr>
</table>	<form method="POST" action="user-daftar-exec" name="insert" id="insert" class="ajax_form">
		<input name="peserta_id" type="hidden" value="466" />
		<input name="kursus_id" type="hidden" value="202" />
		<input name="lastupdate" type="hidden" value="2010-09-27" />

<br /><input type="submit" name="daftar" value="Sahkan Pendaftaran" id="daftar" class="button"  /></form><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>