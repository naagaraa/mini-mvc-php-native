<?php
defined('BASEURL') or exit('No direct script access allowed');
/**
 * Documentasi Code
 */

class Home extends Controller
{
	public function __construct()
	{
		// code ...
	}

	public function index()
	{
		// // init user info
		// $this->lib('info')->getinfo();

		$data['title'] = 'Home';

		$this->view("templateuser/index", $data);
		$this->view("templateuser/Header");
		$this->view("user/Home");
		$this->view("templateuser/footer");
	}
}
