<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div class='notification information'><p>Pendaftaran dalam kursus Penggunaan Teknik Laparoskopi Permanian Beradas Dan Pemindahan Embrio Untuk Meningkatkan Pengeluaran Kambing</p></div><table border="0" cellpadding="4" cellspacing="0">
<tr>
<th>Kod</th><th>00029</th></tr>
<tr>
<td>Kategori</td><td>Teknologi Ternakan</td></tr>
<tr>
<td>Tarikh Kursus Mula</td><td>01 Jan 1970</td></tr>
<tr>
<td>Tarikh Kursus Tamat</td><td>01 Jan 1970</td></tr>
<tr>
<td>Yuran</td><td>RM1900</td></tr>
<tr>
<td>Lokasi</td><td>Kluang</td></tr>
<tr>
<td>Jenis</td><td>Kursus Luar Jadual</td></tr>
</table>	<form method="POST" action="user-daftar-exec" name="insert" id="insert" class="ajax_form">
		<input name="peserta_id" type="hidden" value="122" />
		<input name="kursus_id" type="hidden" value="88" />
		<input name="lastupdate" type="hidden" value="2010-10-25" />

<br /><input type="submit" name="daftar" value="Sahkan Pendaftaran" id="daftar" class="button"  /></form><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>