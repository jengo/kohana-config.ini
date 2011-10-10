<?php defined('SYSPATH') or die('No direct script access.');

class Kohana_Config_INI implements Kohana_Config_Reader {

	// Configuration group name
	protected $_configuration_group;

	// Has the config group changed?
	protected $_configuration_modified = FALSE;

	public function __construct($directory = 'config')
	{
		// Set the configuration directory name
		$this->_directory = trim($directory, '/');
	}

	/**
	 * Load and merge all of the configuration files in this group.
	 *
	 *     $config->load($name);
	 *
	 * @param   string  configuration group name
	 * @param   array   configuration array
	 * @return  $this   clone of the current object
	 * @uses    Kohana::load
	 */
	public function load($group, array $config = NULL)
	{
		if ($files = Kohana::find_file($this->_directory, $group, 'ini', TRUE))
		{
			// Initialize the config array
			$config = array();

			foreach ($files as $file)
			{
				$config = Arr::merge($config, parse_ini_file($file, TRUE));
			}
		}

		return $config;
	}

} // End Config INI
