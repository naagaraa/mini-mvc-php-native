<?php

namespace MiniMvc\Core;

use Matrix\Functions;

class Route
{
	/**
	 * @VIEWS
	 * 
	 * function untuk memanggil views
	 */
	public function view($view, $data = [])
	{
		// mengarah pada folder apps/views/ namaviews.php
		require_once 'apps/views/' . $view . '.php';
	}

	/**
	 * @Models
	 * 
	 * function untuk memanggil Models
	 */
	public function model($model)
	{
		// mengarah pada folder apps/models/ namamodels.php
		require_once 'apps/models/' . $model . '.php';
		return new $model;
	}
	/**
	 * @LIBRARIES
	 * 
	 * function untuk memanggil Libraries
	 */
	public function lib($lib)
	{
		// mengarah pada folder apps/lib/ namalib.php
		require_once 'apps/libraries/' . $lib . '.php';
		return new $lib;
	}

	public function info()
	{
		phpinfo();
	}

	public function router($name_route)
	{
		// In case one is using PHP 5.4's built-in server
		$filename = __DIR__ . preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
		if (php_sapi_name() === 'cli-server' && is_file($filename)) {
			return false;
		}

		// Create a Router
		$router = new \Bramus\Router\Router();

		// Custom 404 Handler
		// $router->set404(function () {
		// 	header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
		// 	echo '404, route not found!';
		// });


		// This route handling function will only be executed when visiting http(s)://www.example.org/about
		$router->get($name_route, function () {
			echo "ini route about";
			// die;
		});

		// Thunderbirds are go!
		$router->run();
	}
}