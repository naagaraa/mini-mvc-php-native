<?php

/**
 * Documentasi Code
 */

class Home extends Controller
{
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