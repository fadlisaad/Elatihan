<?php
// Queries

	$sql = $this->db->query("SELECT * FROM ts_kursus WHERE ts_kursus_id = $id LIMIT 1");

	// Load helper (form and html)
	$this->load->helper('form');
	$this->load->helper('html');

if ($sql->num_rows() > 0)
{		
	$row = $sql->row(); 
	
	// Heading
	echo heading($row->ts_kursus_nama, 3);
	
    $this->session->set_userdata('nama_kursus', $row->ts_kursus_nama);
	$this->session->set_userdata('id', $row->ts_kursus_id);
	// Form start
	$attributes = array('class' => '', 'id' => 'kursus-keterangan');
	
	$keterangan = array(
		 array('Kod', $row->ts_kursus_kod),
		 array('Kategori', $row->ts_kursus_kategori),
		 array('Sinopsis', $row->ts_kursus_keterangan),
		 array('Yuran', 'RM '.number_format($row->ts_kursus_harga,2)),
		 array('Lokasi', $row->ts_kursus_lokasi),
		 array('Jenis', $row->ts_kursus_vendor)
		 );
	echo $this->table->generate($keterangan);
}

// Submit button
$submit = array(
    'name'        => 'Send',
    'id'          => 'daftar',
	'value'       => 'Daftar'
    );
	
echo br(1);
echo anchor("user-daftar", 'Daftar', array('class' => 'button'));

$sql->free_result();
?>