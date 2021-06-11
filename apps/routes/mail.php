<?php

use MiniMvc\Apps\Core\Bootstraping\Routes;
use \Bramus\Router\Router;

// Create a Router object
$router = new Router();

/**
 * membuat function URL masuk ke dalam group /mail/message
 * @author nagara 
 * menggunakan tools bramus router
 */
$router->mount('/mail/message', function () use ($router) {

	$router->set404(function () {
		header('HTTP/1.1 404 Not Found');
		redirect_404();
	});

	/**
	 * return get /mail/message/confirmation
	 */
	$router->get('confirmation', function () {
		// echo "hi";
		Routes::Routing("email/mailer", "confirmation");
	});

});

// run route!
$router->run();
