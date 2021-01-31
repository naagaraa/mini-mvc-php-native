<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;

class HomeController extends Controller
{

	public function __construct()
	{
		// $spreadsheet = new Spreadsheet();
		// $sheet = $spreadsheet->getActiveSheet();
	}

	public function index()
	{
        echo "<br>";
		echo "home / homeController / index";
	}

	public function show($request)
	{
        $test = $request;
        var_dump($test);
        echo "<br>";
		echo "home / homeController / show";
	}
}