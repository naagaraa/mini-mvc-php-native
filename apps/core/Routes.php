<?php

namespace MiniMvc\Apps\Core\Bootstraping;

use Exception;
use MiniMvc\Apps\Core\Bootstraping\Error_Handling;
use \Bramus\Router\Router;

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

	protected function __construct($url, $controller, $method)
	{

		// masih bingun untuk create object reintance
		$route = new Router;
		$route->get($url, self::Routing($controller, $method));
		$route->run();

		// In case one is using PHP 5.4's built-in server
		// by example bramus lib router
		try {

			$filename = __DIR__ . preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
			if (
				php_sapi_name() === 'cli-server' && is_file($filename)
			) {
				return false;
			}
		} catch (\Throwable $th) {
			throw $th;
		}
	}

	/**
	 * method for parserURL or get URL
	 * @author sandhika galih and nagara
	 * @return array
	 */
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

	/**
	 * method for handling routes
	 * @author nagara
	 * @param string, array
	 * @return object dynamic
	 */
	public static function Routing($controller = '', $method = '', $parameter = [])
	{
		// extract name folder
		$newController = explode('/', $controller);
		$namafolder = '';

		// var_dump(count($newController));
		for ($i = 0; $i <= count($newController) - 2; $i++) {
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



		// jika nama folder tidak ada handle here
		if (!$namafolder) {
			// jika tidak berada di dalam folder : handle here
			$controllers = strtolower(end($newController));
			$method = $method;
			$params = $newparams;



			try {
				//code...
				if (!file_exists('apps/controllers/' . $controllers . '.php')) {
					throw new Exception("controller " . $controllers . " Not Found. | cek nama Controller-nya atau Folder-nya udah bener belum? pada Routing Web.php");
				}

				# call file nya
				require_once dirname(realpath(__DIR__), 1) . "/controllers/" . $controllers . ".php";

				# create new object form class
				$class = "app\\controllers\\" . $controller;
				$controllers = new $class;

				# check method exits
				if (method_exists($controllers, $method) == false) {
					throw new Exception($method . " Not Found check controller " . $controller, 1);
				}

				# check if url have parameter
				if (!empty($params)) {
					$params = array_values($params);
				} else {
					$params = [];
				}

				// call classs and method OOP style
				$controllers::{$method}($params);


				die;
			} catch (\Throwable $exception) {
				$my_error = new Error_Handling;
				$my_error->showerror_message($exception->getMessage(), $exception->getFile(), $exception->getLine(), $exception->getTraceAsString());
				die();
			}
		} else {
			// jika berada di dalam folder : handle here
			$folder = $namafolder;
			$folder = str_replace("/", "", $folder);
			$controller = strtolower(end($newController));
			$method = $method;
			$params = $newparams;

			try {
				//code...
				if (!file_exists('apps/controllers/' . $folder . '/' . $controller . '.php')) {
					throw new Exception($folder . "/" . $controller . " controller Not Found. | cek nama Controller-nya atau Folder-nya udah bener belum? pada Routing Web.php");
				}

				# call file nya
				require_once dirname(realpath(__DIR__), 1) . "\\controllers\\" . $folder . "\\" . $controller . ".php";

				# create new object form class
				$class = "app\controllers" . "\\" . str_replace("/", "\\", $folder) . "\\" . $controller;
				$controllers = new $class;


				# check if method exist
				if (method_exists($controllers, $method) == false) {
					throw new Exception($method . " Not Found check controller " . $controller, 1);
				}

				# check if url have parameter
				if (!empty($params)) {
					$params = array_values($params);
				} else {
					$params = [];
				}

				// call classs and method and method OOP style
				$controllers::{$method}($params);

				die;
			} catch (\Throwable $exception) {
				$my_error = new Error_Handling;
				$my_error->showerror_message($exception->getMessage(), $exception->getFile(), $exception->getLine(), $exception->getTraceAsString());
				die();
			}
		}
		die;
	}

	// new route development test
	public static function get_test($url = "", $action = null)
	{
		// pecah array
		$array = explode("@", $action);

		$controller = array_shift($array);
		$method = end($array);


		$object = new Routes($url, $controller, $method);
		// $object::__construct($url, $controller, $method);
		/**
		 * butuh create instance setiap pemanggilan
		 */
		$route = new Router;
		$route->get($url, self::Routing($controller, $method));
		$route->run();
	}

	// protected function __destruct()
	// {
	// 	$router = new Router();
	// 	$router->run();
	// }
}
