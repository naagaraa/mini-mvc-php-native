<?php

/**
 * Documentasi Code
 */

class Listnews extends Controller
{
	public function __construct()
	{
		// code here
		// session_start();
	}
	public function index()
	{
		// code here
		$data['judul'] = 'List News';

		$this->view("templateadmin/index", $data);
		$this->view("templateadmin/Header");
		$this->view("admin/Listnews");
		$this->view("templateadmin/Footer");
	}

	public function DeleteArtikel($uniqid)
	{
		// code here
	}

	public function publishArtikel($urlid)
	{
		// code here
	}

	public function unpulishArtikel($urlid)
	{
		// code here
	}
}