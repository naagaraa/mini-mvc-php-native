<?php

/**
 * Documentasi Code
 */

class Contact extends Controller
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

		$data['judul'] = 'Contact';
		$data['contact'] = $this->model('contact_model')->getAllContact();
		// $data['contact'] = $this->model('contact_model')->getContactId($id);

		$this->view("templateadmin/index", $data);
		$this->view("templateadmin/Header");
		$this->view("admin/Contact", $data);
		$this->view("templateadmin/Footer");
	}

	public function cetak($id){
		$data['cetakinfo'] = $this->model('contact_model')->getContactId($id);

		// var_dump($data['cetakinfo']);

		// $this->view("templateadmin/index", $data);
		// $this->view("templateadmin/Header");
		$this->view("admin/cetak_pesan", $data);
		// $this->view("templateadmin/Footer");
	}
}