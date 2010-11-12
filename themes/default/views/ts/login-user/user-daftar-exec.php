<?php require_once APPPATH.'themes/default/views/ts/login-user/auth.php';
/**
 * Copyright 2009-2011 MARDI
 * Developed by: Mohd Fadli Saad, ZNA System Sdn Bhd
 * This file is part of MARDILMS.
 * The latest code can be found at http://elearn.mardi.gov.my/
 * 
 * Description : Process invoices.
 */
	$this->load->helper(array('form', 'url'));
	$this->load->library('validation');
	$this->load->database();
	
	// Check wheter exist same kursus ID in database
	$course_id 	= $this->session->userdata('id');
	$user_id 	= $_SESSION['SESS_ADMIN_ID'];
	
	$sql = $this->db->query("SELECT * FROM ts_invoice WHERE peserta_id = $user_id AND kursus_id = $course_id");

	if ($sql->num_rows() === 1) {
		echo "<div class='notification failure'><p>Kursus yang anda pilih telah ada dalam <a href='keterangan-pendaftaran'>senarai kursus berdaftar</a> anda</p></div>";
		echo "Sila pilih kursus lain. Klik pada pautan Kursus Berjadual pada menu sebelah kanan ini.";
	}
	else {
		$id = $this->db->insert('ts_invoice', array(
		'kursus_id'     => $this->input->post('kursus_id'),
		'peserta_id'    => $this->input->post('peserta_id'),
		'invoices'      => 'E'.date('ymHms'),
		'lastupdate'    => $this->input->post('lastupdate')
		)
	);
	redirect('user-daftar-berjaya');
	}
?>