<?php

namespace MiniMvc\Apps\Routes\Bootstraping;

use MiniMvc\Apps\Core\Bootstraping\Routes;
use \Bramus\Router\Router;

class Web extends Routes
{
	/**
	 * -------------------------------------------------------------------------------
	 * Documentasi Code App
	 * Author : nagara
	 * -------------------------------------------------------------------------------
	 * 
	 *  untuk mengatur Route view yang diambil pada controller
	 *  Route menggunakan library bramus/router
	 * -------------------------------------------------------------------------------
	 *  Example 
	 * -------------------------------------------------------------------------------
	 * 	$router->get('/login', function () {
	 *  	$this->RouteWithFolder('folder', 'controller', 'method');
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

		$router->get('/home', function () {
			$this->RouteWithFolder('user', 'home', 'index');
		});
		$router->get('/about', function () {
			$this->RouteWithoutFolder('welcome', 'show');
		});

		// admin login
		$router->get('/login', function () {
			$this->RouteWithFolder('admin', 'Kepo', 'index');
		});

		// admin dashboard
		$router->post('/dashboard', function () {
			$this->RouteWithFolder('admin', 'Dasshubodo', 'index');
		});
		$router->get('/chard', function () {
			$this->RouteWithFolder('admin', 'Chard', 'index');
		});
		$router->get('/list-artikel', function () {
			$this->RouteWithFolder('admin', 'ListNews', 'index');
		});
		$router->get('/tambah-artikel', function () {
			$this->RouteWithFolder('admin', 'TambahNews', 'index');
		});
		$router->get('/contact-us', function () {
			$this->RouteWithFolder('admin', 'Contact', 'index');
		});
		$router->get('/tambah-user', function () {
			$this->RouteWithFolder('admin', 'Register', 'index');
		});
		$router->get('/user-list', function () {
			$this->RouteWithFolder('admin', 'Userlist', 'index');
		});
		$router->get('/track-akses', function () {
			$this->RouteWithFolder('admin', 'Report', 'index');
		});
		$router->get('/visit-page', function () {
			$this->RouteWithFolder('admin', 'Report', 'VisitPage');
		});



		// run route!
		$router->run();
	}
}