<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

/**
 * Kursus Class
 *
 * @package CodeJourdein
 * @author Jourdein
 **/
 
class Kursus extends Public_Controller
{  
    
    function Kursus()
    {
        parent::Public_Controller();
        
    }
    
    function index()
    {
        $this->data = array();
        $this->template->set_layout('basic');
        $this->template->build('index', $this->data);
    }
	
	function pengesahan($key = '')
	{
		if(empty($key)) 
		{
			$this->session->set_flashdata('error','Ralat dalam mengesahkan pendaftaran anda. Hubungi kami untuk bantuan teknikal.');
			redirect('login');
		}
		
		else {
			
			$this->db->where(array(
				'activation' 	=> $key, 
				'active' 		=> '0'
				));	
			$this->db->update('ts_peserta', array('active' => '1'));

			if ($this->db->affected_rows()) {
				$this->session->set_flashdata('notice','Pengesahan anda dalam sistem e-Latihan berjaya.');
			}
			else {
				$this->session->set_flashdata('error','Sistem mendapati anda telah membuat pengesahan');
			}	
			redirect('login');		
		}
	}
} // END class Kursus

?>