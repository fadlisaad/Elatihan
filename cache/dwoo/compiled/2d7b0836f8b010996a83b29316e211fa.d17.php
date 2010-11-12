<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>
<h3>Selamat datang, Azman (jmn1005@yahoo.com)</h3>

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
				<td valign="top">45011</td>
				<td valign="top">Good Hygiene Practices (GHP) Dalam Industri Pemprosesan Makanan</td>
				<td valign="top">26/07/2010 hingga 29/07/2010</td>
				<td valign="top">E1007090703</td>
			</tr>
					<tr>
				<td valign="top">2</td>
				<td valign="top">38041</td>
				<td valign="top">Teknologi Pemprosesan  Produk Salai (ikan salai, franfurters, sosej ikan sejukbeku) </td>
				<td valign="top">27/09/2010 hingga 29/09/2010</td>
				<td valign="top">E1007000722</td>
			</tr>
					<tr>
				<td valign="top">3</td>
				<td valign="top">21012</td>
				<td valign="top">Penternakan Kambing Boer Secara Komersial (Siri 2)</td>
				<td valign="top">22/11/2010 hingga 25/11/2010</td>
				<td valign="top">E1006030654</td>
			</tr>
				</tbody>
	</table>
<p>Status permohonan kursus anda dalam kursus berkenaan adalah betul semasa tarikh 06-10-2010. Jika terdapat sebarang perubahan, pihak pentadbir kursus akan memaklumkan kepada anda.</p>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>