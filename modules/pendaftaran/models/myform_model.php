<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class Myform_model extends Model {

	function __construct()
	{
		parent::Model();
	}

	function SaveForm($form_data)
	{
		$this->db->insert('ts_peserta', $form_data);
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		return FALSE;
	}
	
	function CheckIC($form_data)
	{
		$this->db->where('ts_peserta_ic', $this->input->post('ic'));
		$ic_yes = $this->db->get('ts_peserta')->result();
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		return FALSE;
	}
}
?>