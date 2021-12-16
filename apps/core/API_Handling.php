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
	 * function untuk memanggil Models
	 * @author nagara
	 * @param string
	 * @return files
	 */
	public static function model($model = '')
	{
		// mengarah pada folder apps/models/ namamodels.php
		try {
			if (!file_exists('apps/models/' . $model . '.php')) {
				throw new Exception("Models " . $model . " Not Found. Check Controllernya Bro di bagian load modelnya ");
			}

			require_once 'apps/models/' . $model . '.php';
			return new $model;
			exit;
		} catch (Exception $exception) {
			$my_error = new Error_Handling;
			$my_error->showerror_message($exception->getMessage(), $exception->getFile(), $exception->getLine(), $exception->getTraceAsString());
			exit;
		}
	}

	/**
	 * method for handling routes
	 * @author nagara
	 * @param string, array
	 * @return object dynamic
	 */
	public static function Routing($controller = '', $method = '', $parameter = [])
	{
		// extract name folder
		$newController = explode('/', $controller);
		$namafolder = '';

		// var_dump(count($newController));
		for ($i = 0; $i <= count($newController) - 2; $i++) {
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



		// jika nama folder tidak ada handle here
		if (!$namafolder) {
			// jika tidak berada di dalam folder : handle here
			$controllers = strtolower(end($newController));
			$method = $method;
			$params = $newparams;



			try {
				//code...
				if (!file_exists('apps/api/' . $controllers . '.php')) {
					throw new Exception("api controller " . $controllers . " Not Found. | cek nama Controller-nya atau Folder-nya udah bener belum? pada Routing Web.php");
				}

				# call file nya
				require_once dirname(realpath(__DIR__), 1) . "/api/" . $controllers . ".php";

				# create new object form class
				$class = "app\\apicontrollers\\" . $controller;
				$controllers = new $class;

				# check method exits
				if (method_exists($controllers, $method) == false) {
					throw new Exception($method . " Not Found check controller " . $controller, 1);
				}

				# check if url have parameter
				if (!empty($params)) {
					$params = array_values($params);
				} else {
					$params = [];
				}

				// call classs and method OOP style
				$controllers::{$method}($params);


				die;
			} catch (\Throwable $exception) {
				$my_error = new Error_Handling;
				$my_error->showerror_message($exception->getMessage(), $exception->getFile(), $exception->getLine(), $exception->getTraceAsString());
				die();
			}
		} else {
			// jika berada di dalam folder : handle here
			$folder = $namafolder;
			$folder = str_replace("/", "", $folder);
			$controller = strtolower(end($newController));
			$method = $method;
			$params = $newparams;

			try {
				//code...
				if (!file_exists('apps/api/' . $folder . '/' . $controller . '.php')) {
					throw new Exception($folder . "/" . $controller . " api controller Not Found. | cek nama Controller-nya atau Folder-nya udah bener belum? pada Routing Web.php");
				}

				# call file nya
				require_once dirname(realpath(__DIR__), 1) . "\\api\\" . $folder . "\\" . $controller . ".php";

				# create new object form class
				$class = "app\apicontrollers" . "\\" . str_replace("/", "\\", $folder) . "\\" . $controller;
				$controllers = new $class;


				# check if method exist
				if (method_exists($controllers, $method) == false) {
					throw new Exception($method . " Not Found check controller " . $controller, 1);
				}

				# check if url have parameter
				if (!empty($params)) {
					$params = array_values($params);
				} else {
					$params = [];
				}

				// call classs and method and method OOP style
				$controllers::{$method}($params);

				die;
			} catch (\Throwable $exception) {
				$my_error = new Error_Handling;
				$my_error->showerror_message($exception->getMessage(), $exception->getFile(), $exception->getLine(), $exception->getTraceAsString());
				die();
			}
		}
		die;
	}
}
