<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>
<h3>Selamat datang, Ramli Bin Osman (ramli@uum.edu.my)</h3>

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
				<td valign="top">00012</td>
				<td valign="top">Teknologi Agropelancongan</td>
				<td valign="top">Belum ditentukan</td>
				<td valign="top">E1010051004</td>
			</tr>
					<tr>
				<td valign="top">2</td>
				<td valign="top">00002</td>
				<td valign="top">Lanskap Taman</td>
				<td valign="top">Belum ditentukan</td>
				<td valign="top">E1010051047</td>
			</tr>
					<tr>
				<td valign="top">3</td>
				<td valign="top">00011</td>
				<td valign="top">Pengeluaran Dan Pengendalian Lepas Tuai Tanaman Herba Terpilih</td>
				<td valign="top">Belum ditentukan</td>
				<td valign="top">E1010051001</td>
			</tr>
				</tbody>
	</table>
<p>Status permohonan kursus anda dalam kursus berkenaan adalah betul semasa tarikh 17-10-2010. Jika terdapat sebarang perubahan, pihak pentadbir kursus akan memaklumkan kepada anda.</p>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>