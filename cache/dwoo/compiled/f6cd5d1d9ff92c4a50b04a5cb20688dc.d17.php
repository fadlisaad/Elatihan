<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>
<h3>Selamat datang, Syed Faizal Bin Syed Omar (szal16@yahoo.com)</h3>

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
				<td valign="top">00037</td>
				<td valign="top">Pemprosesan Mi, Tauge Dan Tauhu</td>
				<td valign="top">Belum ditentukan</td>
				<td valign="top">E1008180838</td>
			</tr>
				</tbody>
	</table>
<p>Status permohonan kursus anda dalam kursus berkenaan adalah betul semasa tarikh 13-08-2010. Jika terdapat sebarang perubahan, pihak pentadbir kursus akan memaklumkan kepada anda.</p>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>