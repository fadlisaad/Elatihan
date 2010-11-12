<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>
<h3>Selamat datang, Idawati Yahaya (qisnisya@gmail.com)</h3>

	<table>
		<thead>
			<tr>
				<th>Bil.</th>
				<th>Kod</th>
				<th>Tajuk</th>
				<th>Tarikh</th>
				<th>Invois</th>
			</tr>
		</thead>
		<tbody>
					<tr>
				<td valign="top">1</td>
				<td valign="top">00041</td>
				<td valign="top">Pemprosesan Hasilan Bakeri (kek, cookies)</td>
				<td valign="top">Belum ditentukan</td>
				<td valign="top">E1011231147</td>
			</tr>
					<tr>
				<td valign="top">2</td>
				<td valign="top">32011</td>
				<td valign="top">Pemprosesan Produk Daging  (nuget, burger, sosej)</td>
				<td valign="top">31/05/2010 hingga 03/06/2010</td>
				<td valign="top">E1004140414</td>
			</tr>
				</tbody>
	</table>
<p>Status permohonan kursus anda dalam kursus berkenaan adalah betul semasa tarikh 04-11-2010. Jika terdapat sebarang perubahan, pihak pentadbir kursus akan memaklumkan kepada anda.</p>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>