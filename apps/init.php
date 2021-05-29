<?php

/**
 * -------------------------------------------------------------------------------------------
 * Documentasi Code init
 * @author nagara 
 * -------------------------------------------------------------------------------------------
 *  melakukan initialisasi file config
 * 
 */

include 'config/config.php';


/**
 * -------------------------------------------------------------------------------------------
 * Documentasi Code init
 * @author nagara 
 * -------------------------------------------------------------------------------------------
 *  autoload file core atau inti apps pada folder core
 * 
 */


spl_autoload_register(function ($class) { # spl autoload php atau bootstrap loading classname pada folder core
	$class = explode("\\", $class);
	$class = end($class);
	if (file_exists(__DIR__ . '/core/' . $class . '.php')) {
		require_once __DIR__ . '/core/' . $class . '.php';
	}
	return false;
});


/**
 * -------------------------------------------------------------------------------------------
 * Documentasi Code init
 * @author nagara 
 * -------------------------------------------------------------------------------------------
 *  call core autoload class untuk fiture nested autoloading file
 * 
 */

use MiniMvc\Apps\Core\Bootstraping\Autoload; 



/**
 * -------------------------------------------------------------------------------------------
 * Documentasi Code init
 * @author nagara 
 * -------------------------------------------------------------------------------------------
 *  load libraries folder and all file in sub folder
 * 
 */

$autoload = new Autoload;
$lib = realpath(__DIR__) . "\\libraries\\";
$autoload::directorys($lib);
