<?php
/**
 * Copyright 2009-2011 MARDI
 * Developed by: Mohd Fadli Saad, ZNA System Sdn Bhd
 * This file is part of MARDILMS.
 * The latest code can be found at http://elearn.mardi.gov.my/
 * 
 * Description : Activate user registration.
 */
	
	//Put all error state to 0
	error_reporting(0);
	
	// Load required library and helper
	$this->load->helper(array('form', 'url'));
	$this->load->library('validation');
	
	// Set the key from url segment
	$key = $this->uri->segment(2, 0);
	$this->load->database();
	
	function activate($key)
	{
		
		if(empty($key)) 
		{
			echo "Ralat dalam mengesahkan pendaftaran anda";
		}
		
		else {
			//echo $key; die;
			$this->db->where('activation', $key);
			$id = $this->db->update('ts_peserta', array('active' => '1'));
			//redirect('login');
		}
	}
?>