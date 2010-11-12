<?php require_once APPPATH.'themes/default/views/ts/login-user/auth.php';
	/**
	 * Copyright 2009-2011 MARDI
	 * Developed by: Mohd Fadli Saad, ZNA System Sdn Bhd
	 * This file is part of MARDILMS.
	 * The latest code can be found at http://elearn.mardi.gov.my/
	 * 
	 * Description : Edit personal details.
	 */
	 
	$ic = $_SESSION['SESS_USERNAME'];
	$this->load->helper(array('form', 'url'));
	$this->load->library('validation');
        
	$this->load->database();
        $this->db->where('ts_peserta_ic', $ic);
            $id = $this->db->update('ts_peserta', array(
					'ts_peserta_nama'          => $this->input->post('name'),
					'ts_peserta_ic'            => $this->input->post('ic'),
					'ts_peserta_handfone'      => $this->input->post('tel_bimbit'),
					'ts_peserta_homeline'      => $this->input->post('tel_pej_rumah'),	 
					'ts_peserta_alamat'        => $this->input->post('address'),
					'ts_peserta_email'         => $this->input->post('email'),
					'ts_peserta_umur'          => $this->input->post('umur'),
					'ts_peserta_jantina'       => $this->input->post('jantina'),	 
					'ts_peserta_perkahwinan'   => $this->input->post('taraf'),	 
					'ts_peserta_pendidikan'    => $this->input->post('pendidikan'),
					'ts_peserta_pekerjaan'     => $this->input->post('pekerjaan'),
					'ts_peserta_perusahaan'    => $this->input->post('perusahaan'),
					'ts_majikan_nama'          => $this->input->post('m_nama'),
					'ts_majikan_alamat'        => $this->input->post('m_alamat'),
					'ts_majikan_telefon'       => $this->input->post('m_telefon')
                    )
                );
        redirect('halaman-pengguna');
?>