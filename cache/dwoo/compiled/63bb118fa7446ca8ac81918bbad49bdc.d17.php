<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>
<h3>Selamat datang, Mazdurah Mohd Zin (mazdurah@yahoo.com)</h3>

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
				</tbody>
	</table>
<p>Status permohonan kursus anda dalam kursus berkenaan adalah betul semasa tarikh 06-10-2010. Jika terdapat sebarang perubahan, pihak pentadbir kursus akan memaklumkan kepada anda.</p>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>