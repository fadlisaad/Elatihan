<?php require_once APPPATH.'themes/default/views/ts/login-user/auth.php';
/**
 * Copyright 2009-2011 MARDI
 * Developed by: Mohd Fadli Saad, ZNA System Sdn Bhd
 * This file is part of MARDILMS.
 * The latest code can be found at http://elearn.mardi.gov.my/
 * 
 * Description : Registration controller.
 */
if( is_null($_SESSION['SESS_USERNAME']) )
	{
        redirect('login');
    }

	else
    {
		$id = $this->session->userdata('id');
		$sql = $this->db->query("SELECT * FROM ts_kursus WHERE ts_kursus_id = $id");
		
		// Load helper (form and html)
		$this->load->helper('form');
		$this->load->helper('html');

if ($sql->num_rows() > 0)
{	
	$row = $sql->row();
	
	echo "<div class='notification information'><p>Pendaftaran dalam kursus ".$row->ts_kursus_nama."</p></div>";

	// Form start
	$attributes = array('class' => '', 'id' => 'kursus-keterangan');
	
	$keterangan = array(
		 array('Kod', $row->ts_kursus_kod),
		 array('Kategori', $row->ts_kursus_kategori),
		 array('Tarikh Kursus Mula', date("d M Y",strtotime($row->ts_kursus_tarikh_mula))),
		 array('Tarikh Kursus Tamat', date("d M Y",strtotime($row->ts_kursus_tarikh_tamat))),
		 array('Yuran', 'RM'.$row->ts_kursus_harga),
		 array('Lokasi', $row->ts_kursus_lokasi),
		 array('Jenis', $row->ts_kursus_vendor)
		 );
	echo $this->table->generate($keterangan);
	}
	?>
	<form method="POST" action="user-daftar-exec" name="insert" id="insert" class="ajax_form">
		<input name="peserta_id" type="hidden" value="<?php echo $_SESSION['SESS_ADMIN_ID']; ?>" />
		<input name="kursus_id" type="hidden" value="<?php echo $row->ts_kursus_id; ?>" />
		<input name="lastupdate" type="hidden" value="<?php echo date('Y-m-d'); ?>" />

<?php
// Submit button
$submit = array(
    'name'      => 'daftar',
    'id'        => 'daftar',
	'type'		=> 'submit',
	'value'     => 'Sahkan Pendaftaran',
	'class'		=> 'button'
    );
	
echo br(1);
echo form_submit($submit);
echo "</form>";
$sql->free_result();
}
?>