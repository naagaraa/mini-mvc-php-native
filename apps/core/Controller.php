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

class Controller
{
	/**
	 * VIEWS
	 * @author nagara
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
			$my_error = new Error_Handling;
			$my_error->showerror_message($exception->getMessage() , $exception->getFile() , $exception->getLine() , $exception->getTraceAsString());
			exit;
		}
	}

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
	 * Error_view
	 * @author nagara
	 * function untuk memanggil error view pada folder error/pages
	 */
	public function error_view($view = '', $data = [])
	{
		// mengarah pada folder apps/error/pages/ namaviews.php
		try {
			
			if(!file_exists('apps/error/pages/' . $view . '.php')){
				throw new Exception("views ". $view ." Not Found. Check Controllernya Bro di bagian load view-nya ");
			}
			require_once 'apps/error/pages/' . $view . '.php';

		} catch (\Throwable $exception) {
			$my_error = new Error_Handling;
			$my_error->showerror_message($exception->getMessage() , $exception->getFile() , $exception->getLine() , $exception->getTraceAsString());
			exit;
		}
	}
}