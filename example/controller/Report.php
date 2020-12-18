<?php

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
		// init user info
		$this->lib('info')->getinfo();

		if (!isset($_SESSION['login'])) {
			header('Location:' . BASEURL . 'Dasshubodo');
			exit;
		}

		// cek jika bukan super admin / admin
		if ($_SESSION['level'] === '2') {
			header('Location:' . BASEURL . 'Dasshubodo');
			exit;
		}

		$data['judul'] = 'Visit';
		$data['visitor'] = $this->model('Visitor_model')->getAllInfoVisitor();

		$this->view("templateadmin/index", $data);
		$this->view("templateadmin/Header");
		$this->view("admin/VisitPage", $data);
		$this->view("templateadmin/Footer");
	}
}