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
	public static function view($view = '', $data = [])
	{
		// mengarah pada folder apps/views/ namaviews.php
		try {
			if (!file_exists(_ROOT_VIEW . $view . '.php')) {
				throw new Exception("View ". $view ." Not Found. Check Controllernya Bro");
			}

			# comment this jika tidak ingin menggunakan twig engine
			// $loader = new \Twig\Loader\FilesystemLoader(_ROOT_VIEW);
            // $twig = new \Twig\Environment($loader, ['debug' => true]);

            // echo $twig->render($view . '.php' , $data);

			# uncomment this jika tidak ingin menggunakan twig engine
			require_once _ROOT_VIEW . $view . '.php';  //update template engine menggunakan twig
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
	public static function model($model = '')
	{
		// mengarah pada folder apps/models/ namamodels.php
		
		try {
			if (!file_exists(_ROOT_MODEL . $model . '.php')) {
				throw new Exception("Models ". $model ." Not Found. Check Controllernya Bro di bagian load modelnya ");
			}

			require_once _ROOT_MODEL . $model . '.php';
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
	public static function error_view($view = '', $data = [])
	{
		// mengarah pada folder apps/error/pages/ namaviews.php
		try {
			
			if(!file_exists(_ROOT_ERROR_VIEW . $view . '.php')){
				throw new Exception("views ". $view ." Not Found. Check Controllernya Bro di bagian load view-nya ");
			}

			require_once _ROOT_ERROR_VIEW . $view . '.php';
			

		} catch (\Throwable $exception) {
			$my_error = new Error_Handling;
			$my_error->showerror_message($exception->getMessage() , $exception->getFile() , $exception->getLine() , $exception->getTraceAsString());
			exit;
		}
	}
}