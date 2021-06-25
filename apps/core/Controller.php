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
	private $input;

	public function __construct()
	{
		try {
			// $this->input = new Request;
		} catch (\Throwable $th) {
			throw $th;
		}
	}
	/**
	 * function untuk memanggil views
	 * @author nagara
	 * @param string and array
	 * @return file
	 */
	public function view($views = '', Array $var = null)
	{
		// mengarah pada folder apps/views/ namaviews.php
		$view = str_replace(".","/", $views);
		try {
			if (!file_exists(_ROOT_VIEW . $view . '.php')) {
				throw new Exception("View ". $view ." Not Found. Check Controllernya Bro");
			}

			# comment this jika tidak ingin menggunakan twig engine
			// $loader = new \Twig\Loader\FilesystemLoader(_ROOT_VIEW);
            // $twig = new \Twig\Environment($loader, ['debug' => true]);

            // echo $twig->render($view . '.php' , $data);

			# convert array assoc to object
			$object = json_decode(json_encode($var));

			#extract key object to variabel
			extract((array) $object);

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
	 * method for call object model
	 * @author nagara
	 * @param string
	 * @return object
	 */
	public  function model($model = '')
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
	 * method for handling error view
	 * @author nagara
	 * @param string and array
	 * @return view
	 */
	public  function error_view($view = '', $data = [])
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