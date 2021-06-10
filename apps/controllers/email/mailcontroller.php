<?php
namespace app\controllers\email;

use MiniMvc\Apps\Core\Bootstraping\Controller;
use MiniMvc\Apps\Core\Bootstraping\Request;

class MailController extends Controller
{

	public function __construct()
	{
		// code here
	}


	public function index()
	{
		echo "mail template";
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