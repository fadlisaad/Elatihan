<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Berjadual Class
 *
 * @package CodeJourdein
 * @author Jourdein
 **/
 
class Berjadual extends Public_Controller
{  
    
    function Berjadual()
    {
        parent::Public_Controller();
        
        $this->template->set_layout('basic');
    }
    
    function index()
    {
        $this->data = array();
         
        $this->template->build('kursus', $this->data);
    }
    
    function keterangan($id = NULL)
    {
        if( is_null($id) )
        {
            redirect('kursus/'.$this->controller);
        }
        
        $this->load->library('table');
        $this->session->set_userdata('kursus_id', $id);
        
        $this->data->id = $id;
        $this->template->build('keterangan', $this->data);
    }
    
} // END class Berjadual

/* End of file berjadual.php */
/* Location: ../modules/kursus/berjadual.php */