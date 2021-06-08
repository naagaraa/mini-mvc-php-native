<?php
use MiniMvc\Apps\Core\Bootstraping\Controller;
use MiniMVC\System\Storage;

class gambar extends Controller
{

	public function __construct()
	{
		// code here
	}

	public function index()
	{
		// echo "ini gambar function index";
		view("gambar");
	}

	public function show($request)
	{
		// code here show here
	}

	public function create()
	{
		// code here create here
		$storage = new Storage();
		$data = $storage->files("gambar");
		var_dump($data);
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