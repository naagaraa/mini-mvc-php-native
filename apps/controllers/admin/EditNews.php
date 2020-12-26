<?php

use MiniMvc\Core\Controller;

/**
 * Documentasi Code
 */

class EditNews extends Controller
{
	public function __construct()
	{
		session_start();
	}

	public function index($urlid)
	{
		// code here
		$data['judul'] = 'Edit News';

		$this->view("templateadmin/index", $data);
		$this->view("templateadmin/Header");
		$this->view("admin/Editnews");
		$this->view("templateadmin/Footer");
	}

	public function edit()
	{
		// code here
	}
}