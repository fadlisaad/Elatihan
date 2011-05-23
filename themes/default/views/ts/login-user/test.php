<?php
	$id = 47;
	$ci->load->database();

	$this->db->select("
		ts_kursus.ts_kursus_nama, 
		ts_kursus.ts_kursus_year, 
		ts_kursus.ts_kursus_kod, 
		ts_kursus.ts_kursus_kategori, 
		ts_kursus.ts_kursus_keterangan, 
		ts_kursus.ts_kursus_lokasi, 
		ts_kursus.ts_kursus_tarikh_mula, 
		ts_kursus.ts_kursus_tarikh_tamat, 
		ts_kursus.ts_kursus_harga, 
		ts_kursus.ts_kursus_id, 
		ts_kursus.ts_kursus_jadual, 
		ts_kursus.ts_kursus_pubdate"
		);
	$this->db->from("ts_kursus");
	$this->db->where("ts_kursus.ts_kursus_id = $id");
	
	$query_list_peserta = $this->db->get();
	$query_list_peserta->result() as $row_list_peserta;
	
	print_r($query_list_peserta);
?>