<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div class='notification information'><p>Pendaftaran dalam kursus Penternakan Kambing Boer Secara Komersial (Siri 2)</p></div><table border="0" cellpadding="4" cellspacing="0">
<tr>
<th>Kod</th><th>21012</th></tr>
<tr>
<td>Kategori</td><td>Teknologi Ternakan</td></tr>
<tr>
<td>Tarikh Kursus Mula</td><td>22 Nov 2010</td></tr>
<tr>
<td>Tarikh Kursus Tamat</td><td>25 Nov 2010</td></tr>
<tr>
<td>Yuran</td><td>RM1200</td></tr>
<tr>
<td>Lokasi</td><td>Kluang</td></tr>
<tr>
<td>Jenis</td><td>Kursus Berjadual</td></tr>
</table>	<form method="POST" action="user-daftar-exec" name="insert" id="insert" class="ajax_form">
		<input name="peserta_id" type="hidden" value="1" />
		<input name="kursus_id" type="hidden" value="162" />
		<input name="lastupdate" type="hidden" value="2010-10-21" />

<br /><input type="submit" name="daftar" value="Sahkan Pendaftaran" id="daftar" class="button"  /></form><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>