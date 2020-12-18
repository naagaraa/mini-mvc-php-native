<?php

/**
 * Documentasi Code
 */

class Userlist extends Controller
{
	public function __construct()
	{
		session_start();
	}
	public function index()
	{
		// code here
		$data['judul'] = 'User List';

		$this->view("templateadmin/index", $data);
		$this->view("templateadmin/Header");
		$this->view("admin/Userlist");
		$this->view("templateadmin/Footer");
	}

	public function DeleteUser($id)
	{
		// code here
	}
}