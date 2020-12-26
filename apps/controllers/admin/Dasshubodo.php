<?php

use MiniMvc\Core\Controller;

/**
 * Documentasi Code
 */

class Dasshubodo extends Controller
{
	public function __construct()
	{
		session_start();
	}

	public function index()
	{
		// code here
		$data = [
			'judul' =>  'Dashboard',
		];

		$this->view("templateadmin/index", $data);
		$this->view("templateadmin/Header");
		$this->view("admin/Dashboard");
		$this->view("templateadmin/Footer");
	}
}