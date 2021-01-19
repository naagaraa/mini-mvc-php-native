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
	 *  	$this->RouteWithFolder('folder', 'controller', 'method');
	 *  die;
	 * 	});
	 * 
	 * 	$router->get('/news/{slug}', function ($slug) {
	 *  	$this->RouteWithFolder('folder', 'controller', 'method',[$slug]);
	 *  die;
	 * 	});
	 * 
	 * 	$router->get('/about', function () {
	 *  	$this->RouteWithFolder('controller', 'method');
	 * 	die;
	 * 	});
	 * 
	 * 	$router->get('/info', function () {
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
			$this->RouteWithoutFolder('welcome', 'show');
		});
		$router->get('/', function () {
			$this->RouteWithoutFolder('welcome', 'index');
		});

		// run route!
		$router->run();
	}
}