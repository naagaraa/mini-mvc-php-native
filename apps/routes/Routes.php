<?php
// defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Core\Route;
// include 'apps/core/Controller.php';

class Routes extends Route
{

	public function __construct()
	{
		// $spreadsheet = new Spreadsheet();
		// $sheet = $spreadsheet->getActiveSheet();
	}

	public function index()
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
		$router->get('/about', function () {
			echo "ini route about";
			// die;
		});

		// Thunderbirds are go!
		$router->run();

		// EOF
	}
}