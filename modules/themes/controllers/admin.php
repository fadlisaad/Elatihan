<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Admin controller for the themes module
 * 
 * @author 		Phil Sturgeon - PyroCMS Dev Team
 * @package 	PyroCMS
 * @subpackage 	Themes module
 * @category	Modules
 */
class Admin extends Admin_Controller
{
	/**
	 * Constructor method
	 *
	 * @access public
	 * @return void
	 */
	public function __construct()
	{
		// Call the parent's constructor
		parent::Admin_Controller();
		$this->load->model('themes_m');
		$this->lang->load('themes');
	}
	
	/**
	 * List all themes
	 *
	 * @access public
	 * @return void
	 */
	public function index()
	{
		// Get the required data
		$this->template->append_metadata( css('themes.css', 'themes') );
		$this->data->themes = $this->themes_m->get_all();	
		
		// Render the view	
		$this->template->build('admin/index', $this->data);
	}
	
	/**
	 * Set the default theme to theme X
	 * 
	 * @access public
	 * @return void
	 */
	public function set_default()
	{
		// Store the theme name
		$theme = $this->input->post('theme');
		
		// Set the theme
		if($this->themes_m->set_default($theme) )
		{
			$this->session->set_flashdata('success', sprintf( lang('themes.set_default_success'), $theme));
		} 
		
		else
		{
			$this->session->set_flashdata('error', sprintf( lang('themes.set_default_error'), $theme));
		}
		
		// Redirect the user
		redirect('admin/themes');
	}
	
	/**
	 * Upload a theme to the server
	 *
	 * @access public
	 * @return void
	 */
	// #FIXME: Is this method still being used? - Yorick
	public function upload()
	{	
		if($this->input->post('btnAction') == 'upload')
		{	
			$config['upload_path'] 		= APPPATH.'uploads/';
			$config['allowed_types'] 	= 'zip';
			$config['max_size']			= '2048';
			$config['overwrite'] 		= TRUE;	
			
			$this->load->library('upload', $config);
			
			if ($this->upload->do_upload())
			{
				$upload_data = $this->upload->data();
				
				// Check if we already have a dir with same name
				if($this->template->theme_exists($upload_data['raw_name']))
				{
					$this->session->set_flashdata('error', lang('themes.already_exists_error'));
				}
				
				else
				{
					// Now try to unzip
					$this->_extractZip($upload_data['file_path'], $upload_data['file_name'], "third_party/themes/", $upload_data['raw_name'] );
					
					// Check if we unziped the file
					if(! $this->template->theme_exists($upload_data['raw_name']))
					{
						$this->session->set_flashdata('error', lang('themes.extract_error'));
					}
					
					else
					{
						$this->session->set_flashdata('success', lang('themes.upload_success'));
					}
				}
				// Delete uploaded file
				@unlink($upload_data['full_path']);
			}
			
			else
			{
				$this->session->set_flashdata('error', $this->upload->display_errors());
			}
			
			redirect('admin/themes/upload');
		}
		
		$this->template->build('admin/upload', $this->data);
	}
	
	/**
	 * Delete an existing theme
	 * 
	 * @access public
	 * @param string $theme_name The name of the theme to delete
	 * @return void
	 */
	// #FIXME: Is this method still being used? - Yorick
	public function delete($theme_name = "")
	{
		$this->load->helper('file');	
		$name_array = $theme_name != "" ? array($theme_name) : $this->input->post('action_to');
	
		// Delete multiple
		if(!empty($name_array))
		{
			$deleted = 0;
			$to_delete = 0;
			foreach ($name_array as $theme_name) 
			{
				$theme_name = urldecode($theme_name);			
				$to_delete++;
			
				if($this->settings->item('default_theme') == $theme_name)
				{
					$this->session->set_flashdata('error', lang('themes.default_delete_error'));
				}		

				else
				{
					$theme_dir = APPPATH.'themes/'.$theme_name;
					
					if( is_really_writable($theme_dir) )
					{
						delete_files($theme_dir, TRUE);
						
						if(@rmdir($theme_dir))
						{
							$deleted++;
						}
					}
					
					else
					{
						$this->session->set_flashdata('error', sprintf(lang('themes.delete_error'), APPPATH.'themes/'.$theme_name) );
					}
				}
			}
		
			if( $deleted == $to_delete)
			{
				$this->session->set_flashdata('success', sprintf(lang('themes.mass_delete_success'), $delete, $to_delete) );
			}	
		}	

		else
		{
			$this->session->set_flashdata('error', lang('themes.delete_select_error'));
		}
		
		redirect('admin/themes');
	}
	
	/**
	 * Extract an uploaded zipfile
	 * 
	 * @access private
	 * @param string $zipDir The directory of the zip file
	 * @param string $zipFile The zip file
	 * @param string $extractTo The directory used to store the extracted files
	 * @param string $dirFromZip No idea...
	 * @return bool
	 */
	// #FIXME: Is this method still being used? - Yorick
	private function _extractZip( $zipDir = '' , $zipFile = '', $extractTo = '', $dirFromZip = '' )
	{	
		$zip = zip_open($zipDir.$zipFile);
		
		if ($zip)
		{
			while ($zip_entry = zip_read($zip))
			{
				$completePath = $extractTo . dirname(zip_entry_name($zip_entry));
				$completeName = $extractTo . zip_entry_name($zip_entry);
			
				// Walk through path to create non existing directories
				// This won't apply to empty directories ! They are created further below
				if(!file_exists($completePath) && preg_match( '#^' . $dirFromZip .'.*#', dirname(zip_entry_name($zip_entry)) ) )
				{
					$tmp = '';
					foreach(explode('/',$completePath) AS $k)
					{
						$tmp .= $k.'/';
						if(!file_exists($tmp) )
						{
							@mkdir($tmp, 0777);
						}
					}
				}
	
				if (zip_entry_open($zip, $zip_entry, "r"))
				{
					if( preg_match( '#^' . $dirFromZip .'.*#', dirname(zip_entry_name($zip_entry)) ) )
					{
						if ($fd = @fopen($completeName, 'w+'))
						{
							@fwrite($fd, zip_entry_read($zip_entry, zip_entry_filesize($zip_entry)));
							fclose($fd);
						}
						else
						{
							// We think this was an empty directory
							@mkdir($completeName, 0777);
						}
						zip_entry_close($zip_entry);
					}
				}
			}
			zip_close($zip);
		}
		return true;
	}
}
?>