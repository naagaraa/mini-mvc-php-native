<?php

use MiniMvc\Core\Controller;

/**
 * Documentasi Code
 */

class Chard extends Controller
{
	public function __construct()
	{
		session_start();
	}
	public function index()
	{
		// code here
		$data['judul'] = 'Chard';

		$this->view("templateadmin/index", $data);
		$this->view("templateadmin/Header");
		$this->view("admin/Chard");
		$this->view("templateadmin/Footer");
	}
}