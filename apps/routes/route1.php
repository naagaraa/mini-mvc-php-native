<?php

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

	// echo $url = $this->lib('Url');
	// $this->controller = $url[0];
	// unset($url[0]);

	// # instasiasi class tersebut
	// require_once 'apps/controllers/' . $folder_controller_admin . '/' . $this->controller . '.php';
	// $this->controller = new $this->controller;

	// # untuk method admin
	// if (isset($url[1])) {
	// 	if (method_exists($this->controller, $url[1])) {
	// 		$this->method = $url[1];
	// 		unset($url[1]);
	// 	}
	// }
	// # params user
	// if (!empty($url)) {
	// 	$this->params = array_values($url);
	// }

	// # call controller and method, and send params is !empy
	// call_user_func_array([$this->controller, $this->method], $this->params);
});

// Thunderbirds are go!
$router->run();

// EOF