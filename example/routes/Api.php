<?php

namespace MiniMvc\Apps\Routes\Bootstraping;

use MiniMvc\Apps\Core\Bootstraping\API_Handling;
use \Bramus\Router\Router;

class Api 
{
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
	 *  	API_Handling::Routing('folder/controller', 'method');
	 *  die;
	 * 	});
	 * 
	 * 	$router->get('/news/{slug}', function ($slug) {
	 * 		// handle here
	 *  	API_Handling::Routing('folder/controller', 'method',[$slug]);
	 *  die;
	 * 	});
	 * 
	 * 	$router->get('/about', function () {
	 * 		// handle here
	 *  	API_Handling::Routing('controller', 'method');
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



		# on development | beta masih penulisan
		/**
		 * belum kelar gue masih mikirin konsepnya soal route, emg rada susah dimengerti soal 
		 * routing, on the future gue coba buat lib route sendiri, untuk saat ini
		 * masih pakai bramus router
		 */



		/**
		 * membuat function URL masuk ke dalam group /Api
		 * @author nagara 
		 * menggunakan tools bramus router
		 */
		$router->mount('/api', function() use ($router) {

			/**
			 * return get /api/users
			 */
			$router->get('/users', function() {
				API_Handling::Routing('api_management_user', 'index');
			});

		
			/**
			 * return get /users/slug/hobby
			 */
			$router->get('/users/{id}/hobby', function($id) {
				API_Handling::Routing('api_management_user', 'show_hobby_by_id', [$id]);
			});

			/**
			 * return get /api/users/{slug}/address
			 */
			$router->get('/users/{id}/address', function($id) {
				API_Handling::Routing('api_management_user', 'show_addres_by_id', [$id]);
			});
		
		});

		// run route!
		$router->run();
	}
}