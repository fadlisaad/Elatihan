<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>
<h3>Selamat datang, NAJWAABDULLATIF (najwaabdullatif@gmail.com)</h3>

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
				<td valign="top">21012</td>
				<td valign="top">Penternakan Kambing Boer Secara Komersial (Siri 2)</td>
				<td valign="top">22/11/2010 hingga 25/11/2010</td>
				<td valign="top">E1010031035</td>
			</tr>
				</tbody>
	</table>
<p>Status permohonan kursus anda dalam kursus berkenaan adalah betul semasa tarikh 15-10-2010. Jika terdapat sebarang perubahan, pihak pentadbir kursus akan memaklumkan kepada anda.</p>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>