<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>
<h3>Selamat datang, MOHD FADLI SAAD (apad.net@gmail.com)</h3>

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
				<td valign="top">00030</td>
				<td valign="top">Permanian Beradas (AI) Dan Pemindahan Embrio (ET) Pada Lembu</td>
				<td valign="top">Belum ditentukan</td>
				<td valign="top">E1011031148</td>
			</tr>
					<tr>
				<td valign="top">2</td>
				<td valign="top">123456</td>
				<td valign="top">Test</td>
				<td valign="top">30/11/2010 hingga 30/11/2010</td>
				<td valign="top">E1011031114</td>
			</tr>
				</tbody>
	</table>
<p>Status permohonan kursus anda dalam kursus berkenaan adalah betul semasa tarikh 12-11-2010. Jika terdapat sebarang perubahan, pihak pentadbir kursus akan memaklumkan kepada anda.</p>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>