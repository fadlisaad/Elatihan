<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Themes_m extends Model
{
	public $_theme = NULL;
	public $_themes = NULL;

	public function __construct()
	{
		parent::Model();
		$this->_theme = $this->settings->item('default_theme');
	}

	public function get_all()
	{
		foreach($this->template->theme_locations() as $location => $offset)
		{
			foreach(glob($location.'*', GLOB_ONLYDIR) as $path)
			{
				$this->_get_details($path);
			}
		}

		return $this->_themes;
	}
	
	public function get($slug = '')
	{
		if(!$slug)
		{
			$slug = $this->_theme;
		}

		foreach($this->template->theme_locations() as $location => $offset)
		{
			$theme = $this->_get_details($location.$slug);

			if($theme !== FALSE)
			{
				return $theme;
			}
		}

		return FALSE;
	}


	private function _get_details($path)
	{
		$slug = basename($path);
		$location = dirname($path);

		// If it exists already, use it
		if(!empty($this->_themes[$slug]))
		{
			return $this->_themes[$slug];
		}
		
		$xml_file = $path . '/theme.xml';
		if (file_exists($xml_file))
		{
			// Core theme or tird party?
			$is_core = strpos($location, 'third_party') === FALSE;
			$web_path = $is_core ? APPPATH_URI : BASE_URL.'third_party';

			$xml = simplexml_load_file($xml_file);
			$theme->slug				= $slug;
			$theme->name 			= (string) $xml->name;
			$theme->author 			= (string) $xml->author;
			$theme->author_website 	= (string) $xml->author_website;
			$theme->website 		= (string) $xml->website;
			$theme->description 	= (string) $xml->description;
			$theme->version 		= (string) $xml->version;
			$theme->path 			= $path;
			$theme->web_path 			= $web_path;
			$theme->screenshot 	=  $web_path . '/themes/' . $slug . '/screenshot.png';

			// Save for later
			$this->_themes[$slug] = $theme;

			return $theme;
		}

		return FALSE;
	}
	
	function count()
	{
		return $this->theme_infos == NULL ? count($this->get_all()) : count($this->_themes);
	}
	
	function get_default()
	{
		$this->_theme;
	}
	
	function set_default($theme)
	{
		return $this->settings->set_item('default_theme', $theme);
	}
}
?>