<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>
<h3>Selamat datang, Rome Bin Sartijan (waterloo_my@yahoo.com)</h3>

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
				<td valign="top">42011</td>
				<td valign="top">HACCP Verification And Auditing</td>
				<td valign="top">04/10/2010 hingga 08/10/2010</td>
				<td valign="top">E1004140429</td>
			</tr>
				</tbody>
	</table>
<p>Status permohonan kursus anda dalam kursus berkenaan adalah betul semasa tarikh 18-08-2010. Jika terdapat sebarang perubahan, pihak pentadbir kursus akan memaklumkan kepada anda.</p>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>