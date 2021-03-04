<?php
namespace MiniMvc\Apps\Routes\Bootstraping;

use \MiniMvc\Apps\Core\Bootstraping\Routes;
use \Bramus\Router\Router;

class Web 
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

	
	 public function __construct()
	{

		// Create a Router object
		$router = new Router();

		#custom 404 header un-commnet baris berikut
		// $router->set404(function() {
		// 	header('HTTP/1.1 404 Not Found');
		// 	redirect_404();
		// });


		// your route here
		$router->get('/info', function () {
			phpinfo(INFO_GENERAL);
			exit;
		});


		$router->get('/', function () {
			return view('Welcome');
		});


		// run route!
		$router->run();
	}
}