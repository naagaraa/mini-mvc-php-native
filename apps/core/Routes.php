<?php

namespace MiniMvc\Apps\Core\Bootstraping;
use Exception;
use MiniMvc\Apps\Core\Bootstraping\Error_Handling;

/**
 * ===============================================================================================
 * Documentasi Code
 * @author nagara 
 * ===============================================================================================
 *  
 *  routes
 *  untuk mengatur Route yang diambil pada controller atau membuat function routing
 *  yang akan di parsing dari routes/web kepada class routes, dibuatlah function
 *  yang meng hanling semuanya disini.
 */


class Routes
{

	public function __construct()
	{
		// In case one is using PHP 5.4's built-in server
		// by example bramus lib router
		$filename = __DIR__ . preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
		if (
			php_sapi_name() === 'cli-server' && is_file($filename)
		) {
			return false;
		}
	}

	// get URL
	public function ParserURL()
	{
	 /**
     * $_GET['url'] merupakan URL atau pretty url yang di set
     * atau dirapikan pada file .htaccess, jadi penulisannya yang di set
     * menggunakan htaccess adalah index.php?url=xyz sebagai default
     * maka dari itu bisa memanggil $_get['url']
     */
		if (isset($_GET['url'])) {
			/**
			 *  Merapikan url menggukan method rtrim untuk menhapus / dibagian akhir url
			 * 	mengamankan url dari variabel aneh dengan method Filter_var 
			 *  memecar URL menjadi array dengan method explode setiap bertemu string atau karakter /
			 */
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
	}


	public static function Routing($controller = '' , $method = '', $parameter = [])
	{

		// extract name folder
		$newController = explode('/' ,$controller); 
		$namafolder = '';

		// var_dump(count($newController));
		for ($i=0 ; $i <= count($newController) - 2 ; $i++) { 
			$namafolder .= $newController[$i] . '/';
		}
		// end extract name folder


		// extract new params
		$newparams = [];
		if ($parameter) {
			# code...
			$newparams = explode('/', $parameter[0]);
		}

		// end extract new params



		// jika nama folder ada handle here
		if (!$namafolder) 
		{
			// jika tidak berada di dalam folder : handle here
			$controllers = end($newController);
			$method = $method;
			$params = $newparams;

			try {
				//code...
				if (!file_exists('apps/controllers/' . $controllers . '.php')) {
					throw new Exception("Controller " . $controller . " Not Found. | cek nama Controller-nya udah bener belum? pada Routing Web.php");
				}
	
	
				# instasiasi class tersebut
				require_once 'apps/controllers/' . $controllers . '.php';
				$controller = new $controllers;
	
				# untuk method user
				if (isset($method)) {
					if (method_exists($controller, $method)) {
						$method = $method;		
					} else {
						throw new Exception("Method " . $method . " Not Found. | cek nama method-nya udah bener belum? pada Routing Web.php");
					}
				}
	
				# params user
				if (!empty($params)) {
					$params = array_values($params);			
				} else {
					$params = [];
				}
	
				# call controller and method, and send params is !empy
				call_user_func_array([$controller, $method], $params);
				exit;
			} catch (\Throwable $exception) {
				$my_error = new Error_Handling;
				$my_error->showerror_message($exception->getMessage() , $exception->getFile() , $exception->getLine() , $exception->getTraceAsString());
				exit;
			}
			
		}
		else
		{
			// jika berada di dalam folder : handle here
			$folder = $namafolder;
			$controller = end($newController);
			$method = $method;
			$params = $newparams;

			try {
				//code...
				if (!file_exists('apps/controllers/' . $folder . '/' . $controller . '.php')) {
					throw new Exception( $folder . $controller . " Not Found. | cek nama Controller-nya atau Folder-nya udah bener belum? pada Routing Web.php");
				}
	
				# instasiasi class tersebut
				require_once 'apps/controllers/' . $folder . '/' . $controller . '.php';
				$controller = new $controller;
	
				# untuk method user
				if (isset($method)) {
					if (method_exists($controller, $method)) {
						$method = $method;
					} else {
						throw new Exception("Method " . $method . " Not Found. | cek nama method-nya udah bener belum? pada Routing Web.php");
						die;
					}
				}
	
				# params user
				if (!empty($params)) {
					$params = array_values($params);
				} else {
					$params = [];
				}
	
				# call controller and method, and send params is !empy
				call_user_func_array([$controller, $method], $params);
				die;
			} catch (\Throwable $exception) {
				$my_error = new Error_Handling;
				$my_error->showerror_message($exception->getMessage() , $exception->getFile() , $exception->getLine() , $exception->getTraceAsString());
				die();
			}
			
		}
		die;
	}

}