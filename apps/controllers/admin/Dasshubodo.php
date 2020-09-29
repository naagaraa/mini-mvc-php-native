<?php

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

		// init user info
		// $this->lib('info')->getinfo();

		$data = [
			'judul' =>  'Dashboard',
		];

		$this->view("templateadmin/index", $data);
		$this->view("templateadmin/Header");
		$this->view("admin/Dashboard");
		$this->view("templateadmin/Footer");
	}
}