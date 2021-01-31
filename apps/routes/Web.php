<?php

namespace MiniMvc\Apps\Routes\Bootstraping;

use MiniMvc\Apps\Core\Bootstraping\Routes;
use \Bramus\Router\Router;

class Web extends Routes
{
	/**
	 * -------------------------------------------------------------------------------
	 * Documentasi Code Web
	 * Author : nagara
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
	 *  	$this->Routing('folder/controller', 'method');
	 *  die;
	 * 	});
	 * 
	 * 	$router->get('/news/{slug}', function ($slug) {
	 * 		// handle here
	 *  	$this->Routing('folder/controller', 'method',[$slug]);
	 *  die;
	 * 	});
	 * 
	 * 	$router->get('/about', function () {
	 * 		// handle here
	 *  	$this->Routing('controller', 'method');
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

	public function __construct()
	{
		// Create a Router object
		$router = new Router();

		// your route here
		$router->get('/info-php', function () {
			$this->Routing('welcome', 'show');
		});
		$router->get('/', function () {
			$this->Routing('welcome', 'index');
		});
		$router->get('/home/{slug}', function ($slug) {
			$this->Routing('admin/middleware/AuthController', 'show', [$slug]);
		});
		$router->get('/home', function () {
			$this->Routing('admin/middleware/AuthController', 'index');
		});
		$router->get('/about', function () {
			$this->Routing('AboutController', 'index');
		});
		$router->get('/about/{slug}', function ($slug) {
			$this->Routing('AboutController', 'show', [$slug]);
		});

		// run route!
		$router->run();
	}
}