<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>
<h3>Selamat datang, Samuel Tang (t_s007@yahoo.com)</h3>

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
				<td valign="top">44011</td>
				<td valign="top">Good Manufacturing Practices (GMP) Untuk Industri Pemprosesan Makanan</td>
				<td valign="top">04/10/2010 hingga 07/10/2010</td>
				<td valign="top">E1008050800</td>
			</tr>
				</tbody>
	</table>
<p>Status permohonan kursus anda dalam kursus berkenaan adalah betul semasa tarikh 23-08-2010. Jika terdapat sebarang perubahan, pihak pentadbir kursus akan memaklumkan kepada anda.</p>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>