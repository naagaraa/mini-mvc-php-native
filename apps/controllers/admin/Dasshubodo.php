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
		$this->lib('info')->getinfo();

		if (!isset($_SESSION['login'])) {
			// var_dump($_SESSION);
			header('Location:' . BASEURL . 'Kepo');
			exit;
		}


		$visitor = $this->model('Visitor_model')->getAllRowVisitor();
		$visit_views = $this->model('Visitor_model')->getAllInfoVisitor();

		$n_views = 0;
		for ($i = 0; $i <= $visitor - 1; $i++) {
			$n_views += $visit_views[$i]['visit_views'];
		}

		// foreach ($visit_views as $row) {
		// 	var_dump($row['judul_content']);
		// 	var_dump($row['visit_views']);
		// }
		// die;

		$data = [
			'judul' =>  'Dashboard',
			'views' =>  $n_views,
			'totalResource' => $visitor,
			'artikel' => $visit_views,
		];

		$this->view("templateadmin/index", $data);
		$this->view("templateadmin/Header");
		$this->view("admin/Dashboard", $data);
		$this->view("templateadmin/Footer");
	}
}
