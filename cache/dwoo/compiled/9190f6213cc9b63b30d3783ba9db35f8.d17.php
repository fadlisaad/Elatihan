<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>
<h3>Selamat datang, Mohd Nazir Bin Mohd Shariff (marketing@kswresources.com)</h3>

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
				<td valign="top">00051</td>
				<td valign="top">Pemprosesan Kordial, Jus Dan Minuman Terus Buah- Buahan</td>
				<td valign="top">Belum ditentukan</td>
				<td valign="top">E1009080956</td>
			</tr>
					<tr>
				<td valign="top">2</td>
				<td valign="top">33011</td>
				<td valign="top">Pemprosesan Kordial, Jus Dan Minuman Terus Buah -	Buahan</td>
				<td valign="top">14/12/2010 hingga 16/12/2010</td>
				<td valign="top">E1009080955</td>
			</tr>
				</tbody>
	</table>
<p>Status permohonan kursus anda dalam kursus berkenaan adalah betul semasa tarikh 06-09-2010. Jika terdapat sebarang perubahan, pihak pentadbir kursus akan memaklumkan kepada anda.</p>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>