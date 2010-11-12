<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Modules model
 * 
 * @author 		Phil Sturgeon and Yorick Peterse - PyroCMS Development Team
 * @package 	PyroCMS
 * @subpackage 	Modules
 * @category	Modules
 * @since 		v0.9.7
 */
class Modules_m extends Model {

	/**
	 * Constructor method
	 * @access public
	 * @return void
	 */
    public function __construct() {
        parent::__construct();
        $this->load->helper('modules/module');
    }

	/**
	 * Return an object containing module data
	 * 
	 * @access public
	 * @param string module The name of the module to load
	 * @return object
	 */
    public function get($module = '')
    {
    	foreach (module_directories() as $directory)
    	{
			if(file_exists($xml_file = $directory.$module.'/details.xml'))
			{
				return $this->_format_xml($xml_file);
			}
		}
    }

	/**
	 * Return an array of objects containing module related data
	 * @access public
	 * @param array params The array containing the modules to load
	 * @return array
	 */
    public function get_modules($params = array())
    {
    	$modules = array();
    	
    	// Loop through directories that hold modules
    	foreach (module_directories() as $directory)
    	{
    		// Loop through modules
	        foreach(glob($directory.'*', GLOB_ONLYDIR) as $module_name)
	        {
	        	if(file_exists($xml_file = $module_name.'/details.xml'))
	        	{
	        		$module = $this->_format_xml($xml_file) + array('slug'=>basename($module_name));

	        		$module['is_core'] = basename(dirname($directory)) != 'third_party';
	        		
	        		// If we only want frontend modules, check its frontend
		        	if(!empty($params['is_frontend']) && empty($module['is_frontend'])) continue;
		        	
		        	// Looking for backend modules
		        	if(!empty($params['is_backend']))
		        	{
		        		// This module is not a backend module
		        		if(empty($module['is_backend'])) continue;

		        		// This user has no permissions for this module
		        		if(!$this->permissions_m->has_admin_access( $this->user->group_id, $module['slug']) ) continue;
		        	}
	       			
	        		// If we only want frontend modules, check its frontend
		        	if(isset($params['is_core']) && $module['is_core'] != $params['is_core']) continue;
		        	
		        	// Check a module is intended for the sidebar
					if(isset($params['is_backend_menu']) && $module['is_backend_menu'] != $params['is_backend_menu']) continue;
					
	        		$modules[] = $module;
	        	}
	        }
        }
    	
        return $modules;
    }
    
    /**
     * Gets the controller of the specified module
	 * @access public
	 * @param string module The name of the module
	 * @return array
     */
    function get_module_controllers($module = '')
    {
    	$controllers = array();
    	
    	// Loop through directories that hold modules
    	foreach (module_directories() as $directory)
    	{
    		// Loop through modules
	        foreach(glob($directory.$module.'/controllers/*'.EXT) as $controller)
	        {
        		$controllers[] = basename($controller, EXT);
    		}
    	}

        return $controllers;
    }
    
    /**
     * Get the methods of the specified module/controller combination
	 * @access public
	 * @return mixed
	 * 
     */
    public function get_module_controller_methods($module, $controller)
    {
    	$module = $this->get($module);
    	
		return !empty($module['controllers'][$controller]['methods']) ? $module['controllers'][$controller]['methods'] : array();    	
    }
    
    /**
     * Format the XML 
	 * @access private
	 * @param string $xml_file The XML file to load
	 * @return array
     */
    private function _format_xml($xml_file)
    {
    	$xml = simplexml_load_file($xml_file);
    	
    	// Loop through all controllers in the XML file
    	$controllers = array();

    	foreach($xml->controllers as $controller)
    	{
    		$controller = $controller->controller;
    		$controller_array['name'] = (string) $controller->attributes()->name;	
    		
    		// Store methods from the controller
    		$controller_array['methods'] = array();
    		
    		if($controller->method)
    		{
    			// Loop through to save methods
    			foreach($controller->method as $method)
    			{
    				$controller_array['methods'][] = (string) $method;
    			}
    		}    		
    		
			// Save it all to one variable
    		$controllers[$controller_array['name']] = $controller_array;
    	}

    	return array(
    		'name'				=>	(string) $xml->name->{constant('CURRENT_LANGUAGE')},
    		'version' 			=> 	(string) $xml->attributes()->version,
    		'type' 				=> 	(string) $xml->attributes()->type,
    		'description' 		=> 	(string) $xml->description->{constant('CURRENT_LANGUAGE')},
    		'skip_xss'			=>	$xml->skip_xss == 1,
    		'is_frontend'		=>	$xml->is_frontend == 1,
    		'is_backend'		=>	$xml->is_backend == 1,
    		'is_backend_menu' 	=>	$xml->is_backend_menu == 1,
    		'controllers'		=>	$controllers
    	);
    }
    
}