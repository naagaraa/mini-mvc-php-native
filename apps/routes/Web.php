<?php

namespace MiniMvc\Apps\Routes\Bootstraping;

use MiniMvc\Apps\Core\Bootstraping\Routes;
use MiniMvc\Core\Controller;

/**
 * -------------------------------------------------------------------------------
 * Documentasi Code App
 * -------------------------------------------------------------------------------
 * 
 *  untuk mengatur Route yang diambil pada controller
 */


class Web
{

	public function __construct()
	{
		// $myroute = new Routes;
		// hidden error log
		// error_reporting(0);
		// write code here
		$url = $this->ParserURL();
		var_dump($url);

		// $Route = new Route;
		// In case one is using PHP 5.4's built-in server
		$filename = __DIR__ . preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
		if (
			php_sapi_name() === 'cli-server' && is_file($filename)
		) {
			return false;
		}

		// Create a Router
		$router = new \Bramus\Router\Router();

		// This route handling function will only be executed when visiting http(s)://www.example.org/about
		$router->get('/home', function () {
			$this->RouteWithFolder('user', 'home', 'index');
			die;
		});
		$router->get('/about', function () {
			// var_dump($myroute);
			$this->RouteWithoutFolder('welcome', 'show');
			die;
		});

		// Thunderbirds are go!
		$router->run();
	}

	public function index()
	{
	}

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
		// unset($url[0]);
		$url = $this->ParserURL();
		$this->controller = $url[1];
		unset($url[1]);

		if (!file_exists('apps/controllers/' . $url[0] . '/' . $this->controller . '.php')) {
			$this->handleWithoutFolder();
			die;
		}

		# instasiasi class tersebut
		require_once 'apps/controllers/' . $url[0] . '/' . $this->controller . '.php';
		$this->controller = new $this->controller;

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
			$this->showerror();
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
		}

		# params user
		if (!empty($url)) {
			$this->params = array_values($url);
		}

		# call controller and method, and send params is !empy
		call_user_func_array([$this->controller, $this->method], $this->params);
		die;
	}

	public function showerror()
	{
		$controller = 'Error_404'; 				# ini untuk controller
		$method = 'index'; 							# ini untuk method
		$params = [];										# ini unutk parameter

		# instasiasi class tersebut
		require_once 'apps/controllers/error/' . $controller . '.php';
		$controller = new $controller;


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
			$this->showerror();
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

	public function RouteWithFolder($folder, $controller, $method)
	{
		// unset($url[0]);
		$folder = $folder;
		$controller = $controller;
		$method = $method;
		$url = $this->ParserURL();
		// $this->controller = $url[1];
		// unset($url[1]);

		if (!file_exists('apps/controllers/' . $folder . '/' . $controller . '.php')) {
			$this->showerror();
			die;
		}

		# instasiasi class tersebut
		require_once 'apps/controllers/' . $folder . '/' . $controller . '.php';
		$controller = new $controller;

		# untuk method user
		if (isset($this->method)) {
			if (method_exists($this->controller, $this->method)) {
				$this->method = $this->method;
				unset($this->method);
			}
		}

		# params user
		if (!empty($url)) {
			$this->params = array_values($url);
		}

		# call controller and method, and send params is !empy
		call_user_func_array([$controller, $method], $this->params);
		die;
	}

	public function RouteWithoutFolder($controller, $method)
	{
		// unset($url[0]);
		// $folder = $folder;
		$controller = $controller;
		$method = $method;
		$url = $this->ParserURL();
		// $this->controller = $url[1];
		// unset($url[1]);

		if (!file_exists('apps/controllers/' . $controller . '.php')) {
			$this->showerror();
			die;
		}

		# instasiasi class tersebut
		require_once 'apps/controllers/' . $controller . '.php';
		$controller = new $controller;

		# untuk method user
		// if (isset($this->method)) {
		// 	if (method_exists($this->controller, $this->method)) {
		// 		$this->method = $this->method;
		// 		unset($this->method);
		// 	}
		// }

		# params user
		if (!empty($url)) {
			$this->params = array_values($url);
		}

		# call controller and method, and send params is !empy
		call_user_func_array([$controller, $method], $this->params);
		die;
	}
}