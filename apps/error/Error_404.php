<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;

/**
 * ===============================================================================================
 * Documentasi Code
 * @author nagara 
 * ===============================================================================================
 * 
 * pada file ini digunakan untuk handling error 404, atau mengatasi
 * halaman yang tidak ditemukan, untuk melakukan customize 
 * show 404 error silahkan buat pages pada folder
 * error/pages. atau ingin mengganti tampilannya
 * silahkan ganti pada view dibawah v1 -> v2.
 */

class Error_404 extends Controller
{
	/**
	 * 
	 * function untuk handle view 404
	 * @author nagara
	 */
	public function index($response = "Halaman tidak ditemukan")
	{
		$data = [
			'message' => $response,
		];
		$this->error_view('error_404_v3', $data);
	}
}