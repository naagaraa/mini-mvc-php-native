<?php
defined('BASEURL') or exit('No direct script access allowed');
/**
 * Class Error akan akan menampilan view/error/error.php
 * Digunakan untuk menghadle error code atau message
 * 404
 */

class Erorr extends Controller
{
	public function __construct()
	{
		// code ...
	}
	/**
	 * Saat class error dipanggil yang akan pertama kali
	 * dipanggil adalah function index.
	 */
	public function index()
	{
		/**
		 * $this->view('folderview/namafile')
		 */
		$this->view("error/error");
	}
}