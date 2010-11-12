<?php
/**
 * Copyright 2009-2011 MARDI
 * Developed by: Mohd Fadli Saad, ZNA System Sdn Bhd
 * This file is part of MARDILMS.
 * The latest code can be found at http://elearn.mardi.gov.my/
 * 
 * Description : View for successful registration.
 */

$this->load->library('email');
	
    $id = $this->session->userdata('id');
	$sql = $this->db->query("SELECT * FROM ts_kursus WHERE ts_kursus_id = $id");
	
	foreach ($sql->result() as $row) {
	$this->email->from('elatihan@mardi.gov.my', 'eLatihan');
		$this->email->to($_SESSION['SESS_EMAIL']);
		$this->email->cc('elatihan@mardi.gov.my');
		$this->email->subject('Pendaftaran dalam Kursus '.$row->ts_kursus_nama.'');
		$content = "<html><body>
			<p>Assalamualaikum dan salam sejahtera ".$_SESSION['SESS_FULLNAME']."</p>
			<p>Berikut adalah keterangan pendaftaran Tuan/Puan dalam kursus ".$row->ts_kursus_nama."</p>
			<p>Tarikh Pendaftaran: ".date('d-M-Y')."</p>
			<p>
				<ul>
					<li>Tajuk Kursus: ".$row->ts_kursus_nama."</li>
					<li>Tarikh Mula: ".date("d M Y",strtotime($row->ts_kursus_tarikh_mula))."</li>
					<li>Tarikh Tamat: ".date("d M Y",strtotime($row->ts_kursus_tarikh_tamat))."</li>
					<li>Tempat: ".$row->ts_kursus_lokasi."</li>
					<li>Invois: E".date('ymHms')."</li>
				</ul>
			</p>
			<p>Untuk keterangan lanjut sila hubungi urusetia kursus di talian 03-89437238 (Program Kursus dan Latihan Teknikal)</p>
			<p>Sekian.<br><br>
			b/p Timbalan Pengarah, Program Kursus dan Latihan Teknikal<br>
			Pusat Perkhidmatan Teknikal<br>
			Ibu Pejabat MARDI<br>
			Peti Surat 12301<br>
			50774 KUALA LUMPUR<br>
			Hakcipta terpelihara Program Kursus dan Latihan Teknikal untuk E-Latihan. Dijana oleh komputer. Tandatangan tidak diperlukan</p></body></html>";
		$this->session->userdata('ts_peserta_nama');
		$this->email->message($content);	
		$this->email->send();
	}
echo "<div class='notification information'><p>Pendaftaran anda dalam kursus ini telah diterima.Sila semak e-mail anda.</p></div>";

?>