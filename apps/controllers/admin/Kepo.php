<?php

use MiniMvc\Apps\Core\Bootstraping\Controller;

/**
 * Documentasi Code
 */

class Kepo extends Controller
{
	public function __construct()
	{
		session_start();
	}

	public function index()
	{
		// code here
		$data['judul'] = 'Login';

		$this->view("templateadmin/index", $data);
		$this->view("admin/Login");
	}

	public function login()
	{
		// code here
	}

	public function Logout()
	{
		// code here
	}
}