<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class Pendaftaran extends Public_Controller {
               
	function Pendaftaran()
	{
 		parent::Public_Controller();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('myform_model');
		$this->template->set_layout('basic');
		$this->load->library('session');
	}	
	function index()
	{
		$this->data = array();
		
		$this->form_validation->set_rules('name','Nama','required|trim|xss_clean|max_length[255]');
		$this->form_validation->set_rules('ic','No kad pengenalan','required|trim|xss_clean|max_length[14]|callback_ic_check');
		$this->form_validation->set_rules('password','Password','required|trim|max_length[50]');
		$this->form_validation->set_rules('emel','E-mail','required|trim|xss_clean|valid_email|max_length[100]');
		$this->form_validation->set_rules('tel_bimbit','Telefon Bimbit','trim|xss_clean|max_length[14]');	
		$this->form_validation->set_rules('tel_pej_rumah','Telefon Rumah','trim|xss_clean|max_length[14]');	
		$this->form_validation->set_rules('address','Alamat','trim|xss_clean|max_length[255]');
		$this->form_validation->set_rules('umur','Umur','trim|xss_clean|is_numeric|max_length[2]');
		$this->form_validation->set_rules('jantina','Jantina','max_length[50]');
		$this->form_validation->set_rules('status_perkahwinan','Status Perkahwinan','max_length[50]');
		$this->form_validation->set_rules('my_kelulusan','Kelulusan','max_length[50]');
		$this->form_validation->set_rules('my_pekerjaan','Pekerjaan','max_length[50]');
			
		$this->form_validation->set_error_delimiters('<br /><span style="color:red;">', '</span>');
		
		if ($this->form_validation->run() == FALSE) // validation hasn'\t been passed
		{
			$this->template->build('myform_view', $this->data);
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
				'ts_peserta_nama'          	=> set_value('name'),
				'ts_peserta_ic'            	=> set_value('ic'),
				'ts_peserta_handfone'      	=> set_value('tel_bimbit'),
				'ts_peserta_homeline'      	=> set_value('tel_pej_rumah'),	 
				'ts_peserta_alamat'        	=> set_value('address'),
				'ts_peserta_email'        	=> set_value('emel'),
				'ts_peserta_umur'         	=> set_value('umur'),
				'ts_peserta_jantina'       	=> set_value('jantina'),	 
				'ts_peserta_perkahwinan'   	=> set_value('status_perkahwinan'),	 
				'ts_peserta_pendidikan'    	=> set_value('my_kelulusan'),
				'ts_peserta_pekerjaan'     	=> set_value('my_pekerjaan'),
				'ts_peserta_perusahaan'   	=> set_value('my_perusahaan'),
				'ts_majikan_nama'         	=> set_value('m_nama'),
				'ts_majikan_alamat'        	=> set_value('m_alamat'),
				'ts_majikan_telefon'       	=> set_value('m_telefon'),
				'ts_peserta_register_date' 	=> date('d-m-Y'),
				'ts_peserta_password'      	=> set_value('password'),
				'ts_peserta_status'        	=> '0',
				'active'          			=> '0',
				'activation'          		=> md5(set_value('ic'))
			);
			// run insert model to write data to db
			
			$this->session->set_userdata($form_data);
			
			if ($this->myform_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				$this->load->library('email');
		
				$this->email->from('elatihan@mardi.gov.my', 'eLatihan');
				$this->email->to($this->session->userdata('ts_peserta_email'));		
				$this->email->subject('Pendaftaran dalam sistem eLatihan');
				$content = "<html><body>
					<p>Assalamualaikum dan salam sejahtera ".$this->session->userdata('ts_peserta_nama')."</p>

					<p>Berikut adalah keterangan pendaftaran Tuan/Puan dalam eLatihan, MARDI</p>
					<p>Tarikh Pendaftaran: ".$this->session->userdata('ts_peserta_register_date')."</p>
					
					<p>
						<ul>
							<li>Nama: ".$this->session->userdata('ts_peserta_nama')."</li>
							<li>Alamat: ".strip_tags($this->session->userdata('ts_peserta_alamat'))."</li>
							<li>E-mail: ".$this->session->userdata('ts_peserta_email')."</li>
							<li>Telefon Bimbit: ".$this->session->userdata('ts_peserta_handfone')."</li>
							<li>Telefon Rumah: ".$this->session->userdata('ts_peserta_homeline')."</li>
							<li>No Kad Pengenalan/Passport: ".$this->session->userdata('ts_peserta_ic')."</li>
							<li>Umur: ".$this->session->userdata('ts_peserta_umur')."</li>
							<li>Jantina: ".$this->session->userdata('ts_peserta_jantina')."</li>
							<li>Taraf Perkahwinan: ".$this->session->userdata('ts_peserta_perkahwinan')."</li>
							<li>Pendidikan: ".$this->session->userdata('ts_peserta_pendidikan')."</li>
							<li>Pekerjaan sekarang: ".$this->session->userdata('ts_peserta_pekerjaan')."</li>
							<li>Bidang: ".$this->session->userdata('ts_peserta_perusahaan')."</li>
							<li>Nama Majikan: ".$this->session->userdata('ts_majikan_nama')."</li>
							<li>Alamat Majikan: ".$this->session->userdata('ts_majikan_alamat')."</li>
							<li>Telefon Majikan: ".$this->session->userdata('ts_majikan_telefon')."</li>
							<li>ID Pengguna: ".$this->session->userdata('ts_peserta_ic')."</li>
							<li>Password: ".$this->session->userdata('ts_peserta_password')."</li>
						</ul>
					</p>
					<p>Klik disini untuk mengaktifkan pendaftaran Tuan/Puan :<br> 
					<a href='http://elearn.mardi.gov.my/pengesahan/".$this->session->userdata('activation')."'>http://elearn.mardi.gov.my/pengesahan/".$this->session->userdata('activation')."</a></p>

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
				
				//redirect or whatever logic needs to occur
				redirect('pendaftaran-berjaya');
				//$this->load->view('berjaya');
				
			}
			elseif ($this->myform_model->CheckIC($form_data) == FALSE)
			{
				echo 'IC yang anda masukkan telah wujud dalam database kami.';
				// Or whatever error handling is necessary
			}
			else
			{
				echo 'An error occurred saving your information. Please try again later';
				// Or whatever error handling is necessary
			}
		}
	}
}
?>