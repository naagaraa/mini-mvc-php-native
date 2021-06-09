<?php
namespace app\controllers;

use MiniMvc\Apps\Core\Bootstraping\Controller;
use MiniMvc\Apps\Libraries\Agent;
use MiniMVC\System\Storage;

/**
 * ------------------------------------------------------------------------------------
 * Documentasi
 * @author nagara
 * ------------------------------------------------------------------------------------
 * 
 * oke new, untuk menggunakan atau memanngil models ataupun view dapat menggunakan 
 * keyword $this ataupung menggunakan static function
 * 
 * contoh : 
 * menggunakan keyword $this
 * 
 * $this->view('namaview)
 * $this->model('namamodel)
 * 
 * menggunakan static function dengan memanggil nama class
 * 
 * Controller::view('namaview)
 * Controller::model('namamodel)
 * 
 * menggunakan build in function
 * 
 * return view('namaview');
 */

class Welcome extends Controller
{

	public function __construct()
	{
		// code here
	}

	public function index()
	{
		echo "ini controller index <br>";	
		echo Agent::get_browser();
	}

	public function about()
	{
		// echo "controller about";
	}

}