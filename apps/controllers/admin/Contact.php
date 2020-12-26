<?php

use MiniMvc\Core\Controller;

/**
 * Documentasi Code
 */

class Contact extends Controller
{
	public function __construct()
	{
		session_start();
	}
	public function index()
	{
		// code here
		$data['judul'] = 'Contact';

		$this->view("templateadmin/index", $data);
		$this->view("templateadmin/Header");
		$this->view("admin/Contact");
		$this->view("templateadmin/Footer");
	}

	public function cetak($id)
	{
		// code here
	}
}