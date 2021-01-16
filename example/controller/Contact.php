<?php

use MiniMvc\Apps\Core\Bootstraping\Controller;

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
		$data['judul'] = 'Contact';

		$this->view("templateadmin/index", $data);
		$this->view("templateadmin/Header");
		$this->view("admin/Contact");
		$this->view("templateadmin/Footer");
	}

	public function cetak($id)
	{
		$data['cetakinfo'] = $this->model('contact_model')->getContactId($id);

		// var_dump($data['cetakinfo']);

		// $this->view("templateadmin/index", $data);
		// $this->view("templateadmin/Header");
		$this->view("admin/cetak_pesan", $data);
		// $this->view("templateadmin/Footer");
	}
}