<?php

namespace MiniMvc\Apps\Routes\Bootstraping;

use MiniMvc\Apps\Core\Bootstraping\API_Handling;
use \Bramus\Router\Router;

class Api extends API_Handling
{
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
				$this->Routing('api_management_user', 'index');
			});
		
			/**
			 * return get /users/slug/hobby
			 */
			$router->get('/users/{id}/hobby', function($id) {
				$this->Routing('api_management_user', 'show_hobby_by_i', [$id]);
			});

			/**
			 * return get /api/users/{slug}/address
			 */
			$router->get('/users/{id}/address', function($id) {
				$this->Routing('api_management_user', 'show_addres_by_id', [$id]);
			});
		
		});

		// run route!
		$router->run();
	}
}