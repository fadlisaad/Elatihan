<?php require_once APPPATH.'themes/default/views/ts/login-user/auth.php'; ?>
<?php

/**
 * Copyright 2009-2011 MARDI
 * Developed by: Mohd Fadli Saad, ZNA System Sdn Bhd
 * This file is part of MARDILMS.
 * The latest code can be found at http://elearn.mardi.gov.my/
 * 
 * Description : Registered course details.
 */

	$this->load->database();
	$id 		= $_SESSION['SESS_USERNAME'];
	$numbering 	= 1;
	
	$this->db->select('*');
	$this->db->from('ts_invoice, ts_kursus, ts_peserta');
	$this->db->where('ts_kursus.ts_kursus_ID = ts_invoice.kursus_id AND ts_peserta.ts_peserta_id = ts_invoice.peserta_id AND ts_peserta.ts_peserta_ic = '.$id.'');
	$this->db->order_by('ts_kursus_tarikh_mula', ASC);

	$query = $this->db->get();
	//print_r($row); die;
?>

<h3>Selamat datang, <?php echo ucwords($_SESSION['SESS_FULLNAME']);?> (<?php echo $_SESSION['SESS_EMAIL']; ?>)</h3>
<?php 
if($query == 0) {
	echo "<div class='notification information'><p>Tiada maklumat pendaftaran</p></div>";
	}
	else { ?>

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
		<?php foreach ($query->result() as $row) { ?>
			<tr>
				<td valign="top"><?php echo $numbering++; ?></td>
				<td valign="top"><?php echo $row->ts_kursus_kod; ?></td>
				<td valign="top"><?php echo $row->ts_kursus_nama; ?></td>
				<td valign="top"><?php 
					if($row->ts_kursus_vendor == 'Kursus Berjadual') {
						echo date("d/m/Y",strtotime($row->ts_kursus_tarikh_mula)).' hingga '.date("d/m/Y",strtotime($row->ts_kursus_tarikh_tamat));
					}
					else {
						echo "Belum ditentukan";
					} 
					?></td>
				<td valign="top"><?php echo $row->invoices; ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
<p>Status permohonan kursus anda dalam kursus berkenaan adalah betul semasa tarikh <?php echo date('d-m-Y'); ?>. Jika terdapat sebarang perubahan, pihak pentadbir kursus akan memaklumkan kepada anda.</p>
<?php } ?>