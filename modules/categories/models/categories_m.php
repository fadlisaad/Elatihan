<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Categories model
 *
 * @package		PyroCMS
 * @subpackage	Categories Module
 * @category	Modules
 * @author		Phil Sturgeon - PyroCMS Dev Team
 */
class Categories_m extends MY_Model
{
	/**
	 * Insert a new category into the database
	 * @access public
	 * @param array $input The data to insert
	 * @return string
	 */
	public function insert($input = array())
    {
    	$this->db->insert('categories', array(
        	'title'=>$input['title'],
        	'slug'=>url_title(strtolower($input['title']))
        ));
        
        return $input['title'];
    }
    
	/**
	 * Update an existing category
	 * @access public
	 * @param int $id The ID of the category
	 * @param array $input The data to update
	 * @return bool
	 */
    public function update($id, $input) {
            
		$this->db->update('categories', array(
            'title'	=> $input['title'],
            'slug'	=> url_title(strtolower($input['title']))
		), array('id' => $id));
            
		return TRUE;
    }

	/**
	 * Callback method for validating the title
	 * @access public
	 * @param string $title The title to validate
	 * @return mixed
	 */
	public function check_title($title = '')
	{
		return parent::count_by('slug', url_title($title)) === 0;
	}
}
?>