<?php

namespace MiniMvc\Apps\Core\Bootstraping;

use Matrix\Functions;

/**
 * ===============================================================================================
 * Documentasi Code
 * @author nagara 
 * ===============================================================================================
 * 
 * ini adalah kelas induk/ parent class yang nantinya akan digunakan 
 * pada child class yang inheritance dengan Class Controller.
 * 
 * ------------------------------------------------------------------
 * example :
 * ------------------------------------------------------------------
 * 
 * class welcomen extends Controller
 * maka untuk memanggil file views cukup dengan 
 * $this->view('namafile', data[])
 * 
 * untuk memanggil model cukup dengan
 * $this->model('namamodel');
 * 
 * jika mempunyai libraries custom bisa dengan
 * $this->lib('namalib');
 */

class API_Handling
{
	/**
	 * @Models
	 * 
	 * function untuk memanggil Models
	 */
	public function model($model)
	{
		// mengarah pada folder apps/models/ namamodels.php
		require_once 'apps/models/' . $model . '.php';
		return new $model;
	}

	public function Routing($controller = '' , $method = '', $parameter = [])
	{

		// extract name folder
		$newController = explode('/' ,$controller); 
		$namafolder = '';

		// var_dump(count($newController));
		for ($i=0 ; $i <= count($newController) - 2 ; $i++) { 
			$namafolder .= $newController[$i] . '/';
		}
		// end extract name folder


		// extract new params
		$newparams = [];
		if ($parameter) {
			# code...
			$newparams = explode('/', $parameter[0]);
		}

		// end extract new params



		// jika nama folder ada handle here
		if (!$namafolder) 
		{
			// jika tidak berada di dalam folder : handle here
			$controllers = end($newController);
			$method = $method;
			$params = $newparams;

			if (!file_exists('apps/api/' . $controllers . '.php')) {
				$this->showerror_404("File tidak ditemukan | controller tidak ditemukan | cek file routes/web.php");
				die;
			}


			# instasiasi class tersebut
			require_once 'apps/api/' . $controllers . '.php';
			$controller = new $controllers;

			# untuk method user
			if (isset($method)) {
				if (method_exists($controller, $method)) {
					$method = $method;		
				} else {
					$this->showerror_404("method tidak ditemukan harap cek file routes/Web.php");
					die;
				}
			}

			# params user
			if (!empty($params)) {
				$params = array_values($params);			
			} else {
				$params = [];
			}

			# call controller and method, and send params is !empy
			call_user_func_array([$controller, $method], $params);
			die;
		}
		else
		{
			// jika berada di dalam folder : handle here
			$folder = $namafolder;
			$controller = end($newController);
			$method = $method;
			$params = $newparams;


			if (!file_exists('apps/api/' . $folder . '/' . $controller . '.php')) {
				$this->showerror_404("File tidak ditemukan | controller tidak ditemukan | cek file routes/web.php");
				die;
			}

			# instasiasi class tersebut
			require_once 'apps/api/' . $folder . '/' . $controller . '.php';
			$controller = new $controller;

			# untuk method user
			if (isset($method)) {
				if (method_exists($controller, $method)) {
					$method = $method;
				} else {
					$this->showerror_404("method tidak ditemukan harap cek file routes/Web.php");
					die;
				}
			}

			# params user
			if (!empty($params)) {
				$params = array_values($params);
			} else {
				$params = [];
			}

			# call controller and method, and send params is !empy
			call_user_func_array([$controller, $method], $params);
			die;
		}
		die;
	}

	public function showerror_404($message = "404 Not Found")
	{
		header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
		$controller = 'Error_404'; 				# ini untuk controller
		$method = 'index'; 							# ini untuk method
		$params = [$message];										# ini unutk parameter

		# instasiasi class tersebut
		require_once 'apps/error/' . $controller . '.php';
		$controller = new $controller;

		# params user
		if (!empty($url)) {
			$this->params = array_values($url);
		}

		# call controller and method, and send params is !empy
		call_user_func_array([$controller, $method], $params);
		return false;
		die;
	}

}