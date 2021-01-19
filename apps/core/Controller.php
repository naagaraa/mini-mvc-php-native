<?php

namespace MiniMvc\Apps\Core\Bootstraping;

use Matrix\Functions;

/**
 * ------------------------------------------------------------------
 * Documentasi Code Controller
 * Author : Nagara
 * ------------------------------------------------------------------
 * 
 * ini adalah kelas induk yang nantinya akan digunakan pada child
 * yang akan inheritance dengan Class Controller.
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
	public function view($view, $data = [])
	{
		// mengarah pada folder apps/views/ namaviews.php
		require_once 'apps/views/' . $view . '.php';
	}

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
	/**
	 * @LIBRARIES
	 * 
	 * function untuk memanggil Libraries
	 */
	public function lib($lib)
	{
		// mengarah pada folder apps/lib/ namalib.php
		require_once 'apps/libraries/' . $lib . '.php';
		return new $lib;
	}


	/**
	 * @Error_view
	 * 
	 * function untuk memanggil error view
	 */
	public function error_view($view, $data = [])
	{
		// mengarah pada folder apps/error/pages/ namaviews.php
		require_once 'apps/error/pages/' . $view . '.php';
	}
}