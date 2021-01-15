<?php
// defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Core\Controller;

// php office vendor libraries
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Test extends Controller
{

	public function __construct()
	{
		// $spreadsheet = new Spreadsheet();
		// $sheet = $spreadsheet->getActiveSheet();
	}

	public function index()
	{
		echo "ini controller test";
		// $url = $this->lib('Url')->geturl();
		// var_dump($url);
		// die;
	}
}