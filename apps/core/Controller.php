<?php

namespace MiniMvc\Apps\Core\Bootstraping;
use Exception;
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

class Controller
{
	/**
	 * @VIEWS
	 * 
	 * function untuk memanggil views
	 */
	public function view($view = '', $data = [])
	{
		// mengarah pada folder apps/views/ namaviews.php
		try {
			if (!file_exists('apps/views/' . $view . '.php')) {
				throw new Exception("View ". $view ." Not Found. Check Controllernya Bro");
			}

			require_once 'apps/views/' . $view . '.php';
			exit;
		} catch (Exception $exception) {
			$message = $exception->getMessage();
			$filename = $exception->getFile();
			$line = $exception->getLine();
			$trace = $exception->getTraceAsString();
			$this->showerror_message($message , $filename , $line , $trace);
			die();
		}
	}

	/**
	 * @Models
	 * 
	 * function untuk memanggil Models
	 */
	public function model($model)
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
			$message = $exception->getMessage();
			$filename = $exception->getFile();
			$line = $exception->getLine();
			$trace = $exception->getTraceAsString();
			$this->showerror_message($message , $filename , $line , $trace);
			die();
		}
	}

	/**
	 * @Error_view
	 * 
	 * function untuk memanggil error view pada folder error/pages
	 */
	public function error_view($view, $data = [])
	{
		// mengarah pada folder apps/error/pages/ namaviews.php
		require_once 'apps/error/pages/' . $view . '.php';
	}

	public function showerror_message($message='', $filename='', $line='', $trace='')
	{
		$controller = 'Error_Message'; 				# ini untuk controller
		$method = 'index'; 								# ini untuk method
		$params = [$message, $filename, $line, $trace];											# ini unutk parameter

		# instasiasi class tersebut
		require_once 'apps/error/' . $controller . '.php';
		$controller = new $controller;


		# call controller and method, and send params is !empy
		call_user_func_array([$controller, $method], $params);
		// die;
	}
}