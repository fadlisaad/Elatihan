<?php
// Queries

	$id = $this->input->post('kursus');
	echo $id;
	
	$sql 	= $this->db->query("SELECT * FROM ts_kursus WHERE ts_kursus_id = '$id' LIMIT 1");
	$files 	= $this->db->query("SELECT * FROM ts_files WHERE files_id = '$id'");

	// Load helper (form and html)
	$this->load->helper('form');
	$this->load->helper('html');

if ($sql->num_rows() > 0)
{		
	$row 	= $sql->row();
	$brosur = $files->row();
	
	// Heading
	echo heading($row->ts_kursus_nama, 3);
	
	// Form start
	$attributes = array('class' => '', 'id' => 'kursus-keterangan');
	
	$keterangan = array(
		 array('Kod', $row->ts_kursus_kod),
		 array('Kategori', $row->ts_kursus_kategori),
		 array('Sinopsis', $row->ts_kursus_keterangan),
		 array('Tarikh Kursus Mula', date("d M Y",strtotime($row->ts_kursus_tarikh_mula))),
		 array('Tarikh Kursus Tamat', date("d M Y",strtotime($row->ts_kursus_tarikh_tamat))),
		 array('Tarikh tutup pendaftaran', date("d M Y",strtotime($row->ts_kursus_jadual))),
		 array('Yuran', 'RM'.$row->ts_kursus_harga),
		 array('Lokasi', $row->ts_kursus_lokasi),
		 array('Jenis', $row->ts_kursus_vendor)
		 );
	echo $this->table->generate($keterangan);
	
	if ($files->num_rows() > 0)
	{
	//echo '<p>Brosur:'.$brosur->name.'</p>';
	print_r($brosur);
	}
}

// Submit button
$submit = array(
    'name'        => 'Send',
    'id'          => 'daftar',
	'value'       => 'Daftar'
    );
	
echo br(1);

echo anchor("kursus/daftar", 'Daftar', array('class' => 'button'));

$sql->free_result();
?>