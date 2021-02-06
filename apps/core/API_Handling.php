<?php

namespace MiniMvc\Apps\Core\Bootstraping;
use Exception;
use MiniMvc\Apps\Core\Bootstraping\Error_Handling;
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
	 * Models
	 * @author nagara
	 * function untuk memanggil Models
	 */
	public function model($model = '')
	{
		// mengarah pada folder apps/models/ namamodels.php
		try {
			if (!file_exists('apps/models/' . $model . '.php')) {
				throw new Exception("Models ". $model ." Not Found. Check Controllernya Bro di bagian load modelnya ");
			}

			require_once 'apps/models/' . $model . '.php';
			return new $model;
			exit;
		} catch (Exception $exception) {
			$my_error = new Error_Handling;
			$my_error->showerror_message($exception->getMessage() , $exception->getFile() , $exception->getLine() , $exception->getTraceAsString());
			exit;
		}
	}

	/**
	 * Routing
	 * @author nagara
	 * function untuk handling routing
	 */
	
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

			try {
				if (!file_exists('apps/api/' . $controllers . '.php')) {
					throw new Exception("Controller " . $controllers . " Not Found. | cek nama Controller-nya udah bener belum? pada Routing API.php");
				}
	
	
				# instasiasi class tersebut
				require_once 'apps/api/' . $controllers . '.php';
				$controller = new $controllers;
	
				# untuk method user
				if (isset($method)) {
					if (method_exists($controller, $method)) {
						$method = $method;		
					} else {
						throw new Exception("Method " . $method . " Not Found. | cek nama method-nya udah bener belum? pada Routing API.php");
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
			} catch (\Throwable $exception) {
				$my_error = new Error_Handling;
				$my_error->showerror_message($exception->getMessage() , $exception->getFile() , $exception->getLine() , $exception->getTraceAsString());
				exit;
			}
		}
		else
		{
			// jika berada di dalam folder : handle here
			$folder = $namafolder;
			$controller = end($newController);
			$method = $method;
			$params = $newparams;


			try {
				if (!file_exists('apps/api/' . $folder . '/' . $controller . '.php')) {
					throw new Exception("Controller " . $controllers . " Not Found. | cek nama Controller-nya udah bener belum? pada Routing API.php");
				}
	
				# instasiasi class tersebut
				require_once 'apps/api/' . $folder . '/' . $controller . '.php';
				$controller = new $controller;
	
				# untuk method user
				if (isset($method)) {
					if (method_exists($controller, $method)) {
						$method = $method;
					} else {
						throw new Exception("Method " . $method . " Not Found. | cek nama method-nya udah bener belum? pada Routing API.php");
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
			} catch (\Throwable $exception) {
				$my_error = new Error_Handling;
				$my_error->showerror_message($exception->getMessage() , $exception->getFile() , $exception->getLine() , $exception->getTraceAsString());
				exit;
			}
		}
		die;
	}

}