<?php

use MiniMvc\Core\Controller;

/**
 * Documentasi Code
 */

class Register extends Controller
{
	public function __construct()
	{
		session_start();
	}
	public function index()
	{
		// init user info

		$data['judul'] = 'Register';

		$this->view("templateadmin/index", $data);
		$this->view("templateadmin/Header");
		$this->view("admin/Add_User");
		$this->view("templateadmin/Footer");
	}

	public function registerUser()
	{
		// code here
	}
}