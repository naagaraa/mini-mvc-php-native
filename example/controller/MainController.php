<?php

use MiniMvc\Apps\Core\Bootstraping\Controller;

/**
 * Documentasi Code
 */

class MainController extends Controller
{
	public function __construct()
	{
		// constructor here

	}
	public function index()
	{
		// code index here
		$data = [
			'judul' => "Example view",
			'content' => "this is content"
		];

		$this->view("nameofview", $data);
	}

	public function show($request)
	{
		// code here show here
	}

	public function create()
	{
		// code here create here
	}

	public function update($request)
	{
		// code here update here
	}

	public function remove($request)
	{
		// code here remove here
	}
}