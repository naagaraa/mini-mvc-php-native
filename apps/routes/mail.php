<?php

use \Bramus\Router\Router;
use MiniMvc\Apps\Core\Bootstraping\Routes;

// Create a Router object
$router = new Router();

/**
 * membuat function URL masuk ke dalam group /Api
 * @author nagara 
 * menggunakan tools bramus router
 */
$router->mount('/mail', function () use ($router) {

	// $router->set404(function () {
	// 	header('HTTP/1.1 404 Not Found');
	// 	redirect_404();
	// });

	/**
	 * return get /api/users
	 */
	$router->get('/template', function () {
        // echo "hello";
		Routes::Routing('email/emailcontroller', 'index');
	});

});

// run route!
$router->run();
