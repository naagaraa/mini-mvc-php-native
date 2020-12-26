<?php

// In case one is using PHP 5.4's built-in server
$filename = __DIR__ . preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
	return false;
}

// Create a Router
$router = new \Bramus\Router\Router();

// Custom 404 Handler
$router->set404(function () {
	header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
	echo '404, route not found!';
});


// This route handling function will only be executed when visiting http(s)://www.example.org/about
$router->get('/about', function () {
	// echo 'About Page Contents';
	# instasiasi class tersebut
	require_once 'apps/controllers/Test.php';
	// $controller = new $controller;


	# call controller and method, and send params is !empy
	call_user_func_array([$controller, $method], $params);
	return false;
});

// Thunderbirds are go!
$router->run();

// EOF