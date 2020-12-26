<?php

namespace MiniMvc\Core;

/**
 * -------------------------------------------------------------------------------
 * Documentasi Code App
 * -------------------------------------------------------------------------------
 * 
 *  untuk mengatur url yang diambil pada controller
 */


class App
{

	protected $controller = 'Home';  # ini untuk controller
	protected $method = 'index';     # ini untuk method
	protected $params = [];	         # ini untuk parameter


	public function __construct()
	{
		# constan folder pada controller yang di atur pada file config
		// $folder_controller_user = controller_user;
		// $folder_controller_admin = controller_admin;
		$folder_controller_user = "user";
		$folder_controller_admin = "admin";


		// hidden error log
		// error_reporting(0);
		// write code here
		$url = $this->ParserURL();

		//  untuk debug Url
		// var_dump($folder_controller_user);
		// die;

		# 	membuat controller user	
		if (file_exists('apps/controllers/' . $folder_controller_user . '/' . $url[0] . '.php')) {
			$this->controller = $url[0];
			unset($url[0]);

			# instasiasi class tersebut
			require_once 'apps/controllers/' . $folder_controller_user . '/' . $this->controller . '.php';
			$this->controller = new $this->controller;

			# untuk method user
			if (isset($url[1])) {
				if (method_exists($this->controller, $url[1])) {
					$this->method = $url[1];
					unset($url[1]);
				}
			}

			# params user
			if (!empty($url)) {
				$this->params = array_values($url);
			}

			# call controller and method, and send params is !empy
			call_user_func_array([$this->controller, $this->method], $this->params);


			# untuk controller halaman admin
		} elseif (file_exists('apps/controllers/' . $folder_controller_admin . '/' . $url[0] . '.php')) {
			$this->controller = $url[0];
			unset($url[0]);

			# instasiasi class tersebut
			require_once 'apps/controllers/' . $folder_controller_admin . '/' . $this->controller . '.php';
			$this->controller = new $this->controller;

			# untuk method admin
			if (isset($url[1])) {
				if (method_exists($this->controller, $url[1])) {
					$this->method = $url[1];
					unset($url[1]);
				}
			}
			# params user
			if (!empty($url)) {
				$this->params = array_values($url);
			}

			# call controller and method, and send params is !empy
			call_user_func_array([$this->controller, $this->method], $this->params);
		} else {
			/** 
			 * 
			 *  jika url tidak ada
			 *  cek jika url == null => halaman index untuk user
			 * 
			 */
			if (empty($url) && !isset($url) == true) {

				/**
				 *   jika url / index not found atau null buat controller defaultnya menjadi welcome
				 *  atau arahkan controller ke welcome
				 */

				/**
				 * default view/ controller == Welcome
				 * jika ingin custon silangkan ganti controller
				 * dan file require_once arahkan pada folder utaman kalian
				 */

				$controller = 'Welcome'; 				# ini untuk controller
				$method = 'index'; 							# ini untuk method
				$params = [];										# ini unutk parameter

				# instasiasi class tersebut
				require_once 'apps/controllers/' . $controller . '.php';
				$controller = new $controller;


				# call controller and method, and send params is !empy
				call_user_func_array([$controller, $method], $params);
				return false;
			}

			# error url 404 handling method
			$this->controller = 'Erorr';
			unset($url[0]);

			# instasiasi class tersebut
			require_once 'apps/controllers/errors/' . $this->controller . '.php';
			$this->controller = new $this->controller;

			# untuk method admin
			if (isset($url[1])) {
				if (method_exists($this->controller, $url[1])) {
					$this->method = $url[1];
					unset($url[1]);
				}
			}
			# params user
			if (!empty($url)) {
				$this->params = array_values($url);
			}

			# call controller and method, and send params is !empy
			call_user_func_array([$this->controller, $this->method], $this->params);
		}

		# cek jika url == null = halaman index untuk user
		if (empty($url) && !isset($url) == true) {

			$controller = 'Home'; 					# ini untuk controller
			$method = 'index'; 							# ini untuk method
			$params = [];										# ini unutk parameter

			# instasiasi class tersebut
			require_once 'apps/controllers/' . $folder_controller_user . '/' . $controller . '.php';
			$controller = new $controller;


			# call controller and method, and send params is !empy
			call_user_func_array([$controller, $method], $params);
			return false;
		}
	}

	/**
	 * membuat function parseURL / preety URL
	 * 
	 * yaitu untuk mengambil value yang di kirimkan melalui url menggunakan method $_GET 
	 * untuk mengirimkan data melalui url digunakan tanda *?* setelah file
	 * 
	 * Example : http://localhost/CompantProfile/?url=Home
	 * 
	 * url 	  	= nama dari 'url'
	 * home		= value dari 'url'
	 */
	public function ParserURL()
	{
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
}