<?php

namespace MiniMvc\Apps\Routes\Bootstraping;

use \MiniMvc\Apps\Core\Bootstraping\Routes;
use \Bramus\Router\Router;

/**
 * -------------------------------------------------------------------------------
 * Documentasi Code Web
 * @author : nagara
 * -------------------------------------------------------------------------------
 * 
 *  untuk mengatur Route view yang diambil pada controller
 *  Route menggunakan library bramus/router
 * 
 * -------------------------------------------------------------------------------
 *  Example 
 * -------------------------------------------------------------------------------
 * 
 * 	$router->get('/login', function () {
 *      // handle here
 *  	Routes::Routing('folder/controller', 'method');
 *  die;
 * 	});
 * 
 * 	$router->get('/news/{slug}', function ($slug) {
 * 		// handle here
 *  	Routes::Routing('folder/controller', 'method',[$slug]);
 *  die;
 * 	});
 * 
 * 	$router->get('/about', function () {
 * 		// handle here
 *  	Routes::Routing('controller', 'method');
 * 	die;
 * 	});
 * 
 * 	$router->get('/info', function () {
 * 		// handle here
 *  	phpinfo();
 *  die;
 * 	});
 * --------------------------------------------------------------------------------
 * 
 * 
 */

// Create a Router object
$router = new Router();

#custom 404 header un-commnet baris berikut
$router->set404(function () {
	header('HTTP/1.1 404 Not Found');
	redirect_404();
});


// your route here
$router->get('/info', function () {
	phpinfo(INFO_GENERAL);
	exit;
});

/**
 * if you want default root / login page just uncommnet here default login 
 * and commnet default welcome
 */

//  default welcome
$router->get('/', function () {
	return view('Welcome');
	// Routes::Routing("Welcome", "index");
});
$router->get('/apa', function () {
	// return view('Welcome');
	var_dump($_SERVER["HTTP_HOST"]);
	echo "apa route";
	exit;
	// Routes::Routing("Welcome", "index");
});
$router->get('/itu', function () {
	// return view('Welcome');
	echo "itu route";
	exit;
	// Routes::Routing("Welcome", "index");
});

// default login
// $router->get('/', function () {
// 	Routes::Routing('/auth/SignInUserController','index');
// });

$router->get('/login', function () {
	Routes::Routing('auth/SignInUserController', 'index');
});
$router->get('/register', function () {
	Routes::Routing('auth/CreateUserController', 'index');
});
$router->get('/forgot-password', function () {
	Routes::Routing('auth/ForgotPasswordController', 'index');
});
$router->get('/verify/reset-password', function () {
	Routes::Routing('auth/ResetPasswordController', 'index');
});

$router->get('/home', function () {
	Routes::Routing('frontend/HomeController', 'index');
});
$router->get('/profile', function () {
	Routes::Routing('auth/UpdateInformationUserController', 'index');
});

// run route!
$router->run();
