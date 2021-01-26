<?php

namespace MiniMvc\Apps\Core\Bootstraping;

/**
 * -------------------------------------------------------------------------------
 * Documentasi Code App Routes
 * Author 	: Nagara
 * -------------------------------------------------------------------------------
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

	public function showerror_404($message = "404 Not Found")
	{
		header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
		$controller = 'Error_404'; 				# ini untuk controller
		$method = 'index'; 							# ini untuk method
		$params = [$message];										# ini unutk parameter

		# instasiasi class tersebut
		require_once 'apps/error/' . $controller . '.php';
		$controller = new $controller;

		# params user
		if (!empty($url)) {
			$this->params = array_values($url);
		}

		# call controller and method, and send params is !empy
		call_user_func_array([$controller, $method], $params);
		return false;
		die;
	}

	public function welcome()
	{
		$url = $this->ParserURL();
		$this->controller = 'Welcome';
		unset($url[0]);

		if (!file_exists('apps/controllers/' . $this->controller . '.php')) {
			$this->showerror_404("File tidak ditemukan | controller tidak ditemukan | cek file routes/web.php");
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

	public function RouteWithFolder($folder, $controller, $method, $url = [])
	{
		$folder = $folder;
		$controller = $controller;
		$method = $method;
		$params = $url;


		if (!file_exists('apps/controllers/' . $folder . '/' . $controller . '.php')) {
			$this->showerror_404("File tidak ditemukan | controller tidak ditemukan | cek file routes/web.php");
			die;
		}

		# instasiasi class tersebut
		require_once 'apps/controllers/' . $folder . '/' . $controller . '.php';
		$controller = new $controller;

		# untuk method user
		if (isset($method)) {
			if (method_exists($controller, $method)) {
				$method = $method;
			} else {
				$this->showerror_404("method tidak ditemukan harap cek file routes/Web.php");
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
	}

	public function RouteWithoutFolder($controller, $method, $parameter = [])
	{

		$controller = $controller;
		$method = $method;
		$params = $parameter;


		if (!file_exists('apps/controllers/' . $controller . '.php')) {
			$this->showerror_404("File tidak ditemukan | controller tidak ditemukan | cek file routes/web.php");
			die;
		}

		# instasiasi class tersebut
		require_once 'apps/controllers/' . $controller . '.php';
		$controller = new $controller;

		# untuk method user
		if (isset($method)) {
			if (method_exists($controller, $method)) {
				$method = $method;
			} else {
				$this->showerror_404("method tidak ditemukan harap cek file routes/Web.php");
				die;
			}
		}

		# params user
		if (!empty($params)) {
			$params = array_values($params);
			return false;
		} else {
			$params = [];
		}

		# call controller and method, and send params is !empy
		call_user_func_array([$controller, $method], $params);
		die;
	}
}