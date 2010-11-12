<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>
<h3>Selamat datang, ISMANOORHENY BINTI ISMAIL (heinny_li@hotmail.com)</h3>

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
				<td valign="top">00003</td>
				<td valign="top">Pengeluaran Sayur- Sayuran Secara Fertigasi</td>
				<td valign="top">Belum ditentukan</td>
				<td valign="top">E1008130857</td>
			</tr>
					<tr>
				<td valign="top">2</td>
				<td valign="top">00008</td>
				<td valign="top">Pengeluaran Sayur-Sayuran Secara Organik</td>
				<td valign="top">Belum ditentukan</td>
				<td valign="top">E1008130800</td>
			</tr>
				</tbody>
	</table>
<p>Status permohonan kursus anda dalam kursus berkenaan adalah betul semasa tarikh 04-09-2010. Jika terdapat sebarang perubahan, pihak pentadbir kursus akan memaklumkan kepada anda.</p>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>