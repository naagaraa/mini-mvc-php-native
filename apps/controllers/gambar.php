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
		$directory = temp_dir();
		$storage = new Storage();
		// $data = $storage->Upload("gambar", $directory);
		$data = $storage->UpdateFile($directory . "f086e28994b7f9ac5bd8b4e6b2fb470f.png" , "gambar" , $directory);
		var_dump($data);
		// var_dump($directory . "aaae1a8fac61ac7a78e834484c012875.png", $directory . "aaae1a8fac61ac7a78e834484c012873.png");
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