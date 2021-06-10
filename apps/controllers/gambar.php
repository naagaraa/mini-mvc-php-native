<?php
namespace app\controllers;

use MiniMvc\Apps\Core\Bootstraping\Controller;
use MiniMvc\Apps\Core\Bootstraping\Request;
use Symfony\Component\Console\EventListener\ErrorListener;

class gambar extends Controller
{

	public function __construct()
	{
		// code here
	}


	public function index()
	{
		echo "controller gambar";

		// smptp_mail([
		// 	"To" => "hello@mail.com",
		// 	"Subject" => "this is subject",
		// 	"Message" => "this is message",
		// 	"Header" => "this is header",
		// ]);

		// $content = [
		// 	"post" => $data,
		// 	"nama" => "nagara",
		// 	"datas" => $data
		// ];
	}

	public function show($request)
	{
		// code here show here
	}

	public function create()
	{
		// code here create here
		$data = Request::html("name");
		// $data = $_POST["name"];
		

		$content = [
			"post" => $data,
			"nama" => "nagara",
			"datas" => $data
		];
		
		view("home", $content);
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