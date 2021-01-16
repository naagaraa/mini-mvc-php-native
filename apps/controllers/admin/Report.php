<?php

use MiniMvc\Apps\Core\Bootstraping\Controller;

/**
 * Documentasi Code
 */

class Report extends Controller
{
	public function __construct()
	{
		session_start();
	}
	public function index()
	{
		// init user info

		$data['judul'] = 'Report Track';

		$this->view("templateadmin/index", $data);
		$this->view("templateadmin/Header");
		$this->view("admin/Report");
		$this->view("templateadmin/Footer");
	}

	public function VisitPage()
	{
		// code here
		$data['judul'] = 'Visit';

		$this->view("templateadmin/index", $data);
		$this->view("templateadmin/Header");
		$this->view("admin/VisitPage");
		$this->view("templateadmin/Footer");
	}
}