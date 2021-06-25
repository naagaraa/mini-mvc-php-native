<?php

namespace MiniMvc\Apps\Core\Bootstraping;


/**
 * ===============================================================================================
 * Documentasi Code
 * @author nagara 
 * ===============================================================================================
 * 
 * ini adalah kelas induk/ parent class yang nantinya akan digunakan 
 * pada child class dengan deklarasi new object.
 * 
 * ------------------------------------------------------------------
 * example :
 * ------------------------------------------------------------------
 * 
 * use MiniMvc\Apps\Core\Bootstraping\Error_Handling;
 * 
 * $error_handling = new Error_Handling;
 * 
 * $error_handling->showerror_404($message);
 * $error_handling->showerror_handling($message, $filename, $line, $trace);
 */

class Error_Handling
{
	/**
	 * method for show error 404 message template
	 * @author nagara 
	 * @param string
	 * @return object
	 */
    public static function showerror_404($message = "404 Not Found")
	{
		// header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
		$controller = 'Error_404'; 				# ini untuk controller
		$method = 'index'; 							# ini untuk method
		$params = [$message];						# ini unutk parameter

		# instasiasi class tersebut
		require_once 'apps/error/' . $controller . '.php';
		$controller = new $controller;

		# params user
		if (!empty($url)) {
			$params = array_values($url);
		}

		# call controller and method, and send params is !empy
		call_user_func_array([$controller, $method], $params);
		return false;
		exit;
	}


	/**
	 * method for show error message
	 * @author nagara 
	 * @param string
	 * @return object
	 */
    public static function showerror_message($message='', $filename='', $line='', $trace='')
	{
        // header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
		$controller = 'Error_Message'; 				# ini untuk controller
		$method = 'index'; 								# ini untuk method
		$params = [$message, $filename, $line, $trace];	# ini unutk parameter

		# instasiasi class tersebut
		require_once 'apps/error/' . $controller . '.php';
		$controller = new $controller;


		# call controller and method, and send params is !empy
		call_user_func_array([$controller, $method], $params);
		exit;
	}

}