<?php

namespace MiniMvc\Apps\Core\Bootstraping;

/**
 * -------------------------------------------------------------------------------
 * Documentasi Code App
 * Author : Nagara
 * -------------------------------------------------------------------------------
 * 
 *  untuk mengatur url yang diambil pada browser dan memanggil controller
 *  default route dibuat untuk memanggil namecontroller/method/params
 *  dibuat mirip seperti framework CI_3 .
 */


class App
{

	protected $controller = 'Welcome';  # ini untuk controller
	protected $method = 'index';     		# ini untuk method
	protected $params = [];	         		# ini untuk parameter


	public function __construct()
	{
		# hidden error log : uncommnent satu baris dibawah
		// error_reporting(0);
		// write code here
		$url = $this->ParserURL();

		#  untuk debug Url : uncomment dua baris dibawah
		// var_dump($url);
		// die;

		# handle url / root
		(!isset($url[1]) 				&& !isset($url[0])) 			? $this->welcome()							  :  false;

		# 	handle default url
		(!isset($url[0]) 				&& !isset($url[1])) 			? $this->showerror_404() 							:  false;

		(isset($url[0])					&& isset($url[1]))				? $this->handleWithFolder() 			:  false;
		// (isset($url[0]) 				&& !isset($url[1])) 			? $this->showerror_404()					 		:  false;
		(isset($url[0]) 				&& !isset($url[1])) 			? $this->handleWithoutFolder()					 		:  false;
		(isset($url[0])					|| isset($url[1])) 				? $this->handleWithoutFolder()	 	:  false;

		(!isset($url[0]) 				|| !isset($url[1])) 			? $this->showerror_404()					  	:  false;
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

	// handle file in controller
	public function handleWithFolder()
	{
		$url = $this->ParserURL();
		$this->controller = $url[1];
		$this->folder = $url[0];

		if (!file_exists('apps/controllers/' . $this->folder . '/' . $this->controller . '.php')) {
			$this->handleWithoutFolder();
			die;
		}

		# instasiasi class tersebut
		require_once 'apps/controllers/' . $this->folder . '/' . $this->controller . '.php';
		$this->controller = new $this->controller;
		unset($url[0]);
		unset($url[1]);

		# untuk method user
		if (isset($url[2])) {
			if (method_exists($this->controller, $url[2])) {
				$this->method = $url[2];
				unset($url[2]);
			}
		}

		# params user
		if (!empty($url)) {
			$this->params = array_values($url);
			unset($url[0]);
		} else {
			$this->params = [];
		}

		# call controller and method, and send params is !empy
		call_user_func_array([$this->controller, $this->method], $this->params);
		die;
	}


	public function handleWithoutFolder()
	{
		$url = $this->ParserURL();
		$this->controller = $url[0];

		unset($url[0]);

		if (!file_exists('apps/controllers/' . $this->controller . '.php')) {
			$this->showerror_404();
			die;
		}
		# instasiasi class tersebut
		require_once 'apps/controllers/' . $this->controller . '.php';
		$this->controller = new $this->controller;

		# untuk method user
		if (isset($url[1])) {
			if (method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
			}
		};

		# params user
		if (!empty($url)) {
			$this->params = array_values($url);
		} else {
			$this->params = [];
		}

		// var_dump($this->params);
		// die;
		# call controller and method, and send params is !empy
		call_user_func_array([$this->controller, $this->method], $this->params);
		die;
	}

	public function showerror_404()
	{
		$message = "gagal";

		$controller = 'Error_404'; 				# ini untuk controller
		$method = 'index'; 								# ini untuk method
		$params = [];											# ini unutk parameter

		# instasiasi class tersebut
		require_once 'apps/error/' . $controller . '.php';
		$controller = new $controller;


		# call controller and method, and send params is !empy
		call_user_func_array([$controller, $method], $params);
		die;
	}

	public function welcome()
	{
		$url = $this->ParserURL();
		$this->controller = 'Welcome';
		unset($url[0]);

		if (!file_exists('apps/controllers/' . $this->controller . '.php')) {
			$this->showerror_404();
			die;
		}
		# instasiasi class tersebut
		require_once 'apps/controllers/' . $this->controller . '.php';
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
		die;
	}
}