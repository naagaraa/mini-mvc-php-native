<?php
// defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Core\Controller;

class About extends Controller
{

	public function __construct()
	{
		// $spreadsheet = new Spreadsheet();
		// $sheet = $spreadsheet->getActiveSheet();
	}

	public function index()
	{
		echo "About";
	}

	public function show()
	{
		echo "ini Controller About method show";
	}
}