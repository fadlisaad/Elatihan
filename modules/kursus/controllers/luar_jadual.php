<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Luar_jadual Class
 *
 * @package CodeJourdein
 * @author Jourdein
 **/
 
class Luar_jadual extends Public_Controller
{  
    
    
    function Luar_jadual()
    {
        parent::Public_Controller();
        
        $this->template->set_layout('basic');
    }
    
    function index()
    {
        $this->data = array();
        
        $this->template->build('kursus');
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
        $this->template->build('keterangan2', $this->data);
    }

    function daftar()
    {
        $this->load->library('validation');
        $this->validation->set_rules(array(
                'name'     => 'trim|required',
                'ic'       => 'trim|required|max_length[12]',
                'password' => 'trim|required',
                'emel'     => 'trim|valid_email'
                )
            );
        $this->validation->set_fields();
        
        if( ! $this->session->userdata('kursus_id') ) 
        {
            redirect('kursus/'.$this->controller);
        }

        $kursus_id = $this->session->userdata('kursus_id');

        if($this->validation->run()) 
        {
            $this->db->where('ts_peserta_ic', $this->input->post('ic'));
            if($this->db->get('ts_peserta')->result())
            {
                $this->session->set_flashdata('error', 'Nombor IC telah ada dalam rekod kami. Sila semak.');
                redirect('kursus/'.$this->controller. '/daftar');
            }
        
            $id = $this->db->insert('ts_peserta', array(
                        'ts_peserta_status'        => $kursus_id,
                        'ts_peserta_nama'          => $this->input->post('name'),
                        'ts_peserta_ic'            => $this->input->post('ic'),
                        'ts_peserta_handfone'      => $this->input->post('tel_bimbit'),
                        'ts_peserta_homeline'      => $this->input->post('tel_pej_rumah'),	 
                        'ts_peserta_alamat'        => $this->input->post('address'),
                        'ts_peserta_email'         => $this->input->post('emel'),
                        'ts_peserta_umur'          => $this->input->post('umur'),
                        'ts_peserta_jantina'       => $this->input->post('jantina'),	 
                        'ts_peserta_perkahwinan'   => $this->input->post('status_perkahwinan'),	 
                        'ts_peserta_pendidikan'    => $this->input->post('my_kelulusan'),
                        'ts_peserta_pekerjaan'     => $this->input->post('my_pekerjaan'),
                        'ts_peserta_perusahaan'    => $this->input->post('my_perusahaan'),
                        'ts_peserta_register_date' => date('d-m-Y'),
                        'ts_peserta_password'      => $this->input->post('password'),
                        'ts_peserta_year'          => date('Y'),
                        'ts_majikan_nama'          => $this->input->post('majikan_nama'),
                        'ts_majikan_alamat'        => $this->input->post('majikan_alamat'),
                        'ts_majikan_telefon'       => $this->input->post('majikan_telefon')
                    )
                );
            if ( ! empty($id)) 
            {
                $this->session->set_flashdata('success', 'Successfully registered');
                redirect('kursus/'.$this->controller);
            }
            else {
                $this->session->set_flashdata('error','Your registration is unsuccessful');
            }
        }

        $this->data->id = $this->session->userdata('kursus_id');
        $this->template->build('daftar', $this->data);
    }
    
} // END class Luar_jadual



/* End of file luar_jadual.php */
/* Location: ../application/modules/luar_jadual.php */