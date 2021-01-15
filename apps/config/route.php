<?php

use MiniMvc\Core\Controller;
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
$router->get('/home', function () {
	// $this->controller('Welcome');
	$url = geturl();
	var_dump($url);
	// require_once 'apps/controllers/Welcome.php';
	die;
	// echo "hello";
});

// Thunderbirds are go!
$router->run();

// EOF

function controller($controller)
{
	require_once 'apps/controllers/' . $controller . '.php';
	return new $control;
}

function lib($lib)
{
	// mengarah pada folder apps/lib/ namalib.php
	require_once 'apps/libraries/' . $lib . '.php';
	return new $lib;
}

function geturl()
{
	# code...
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