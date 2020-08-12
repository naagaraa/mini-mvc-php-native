<?php

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
		// init user info
		$this->lib('info')->getinfo();

		if (!isset($_SESSION['login'])) {
			// var_dump($_SESSION);
			header('Location:' . BASEURL . 'Kepo');
			exit;
		}
		$data['judul'] = 'Chard';

		$this->view("templateadmin/index", $data);
		$this->view("templateadmin/Header");
		$this->view("admin/Chard");
		$this->view("templateadmin/Footer");
	}
}