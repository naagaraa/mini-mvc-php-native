<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Core\Controller;

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
		// var_dump($this->lib('Url')->geturl());
		$data['title'] = 'Home';

		$this->view("templateuser/index", $data);
		$this->view("templateuser/Header");
		$this->view("user/Home");
		$this->view("templateuser/footer");
	}
}