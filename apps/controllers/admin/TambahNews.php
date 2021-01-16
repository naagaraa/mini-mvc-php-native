<?php

use MiniMvc\Apps\Core\Bootstraping\Controller;

/**
 * Documentasi Code
 */

class TambahNews extends Controller
{
	public function __construct()
	{
		session_start();
	}
	public function index()
	{
		// init user info

		$data['judul'] = 'Tambah News';

		$this->view("templateadmin/index", $data);
		$this->view("templateadmin/Header");
		$this->view("admin/Tambahnews");
		$this->view("templateadmin/Footer");
	}

	public function addArtikel()
	{
		// code here 
	}
}