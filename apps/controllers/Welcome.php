<?php
// defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Core\Controller;

// php office vendor libraries
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Welcome extends Controller
{

	public function __construct()
	{
		// $spreadsheet = new Spreadsheet();
		// $sheet = $spreadsheet->getActiveSheet();
	}

	public function index()
	{
		// $spreadsheet = new Spreadsheet();
		// $sheet = $spreadsheet->getActiveSheet();

		# jika tidak ingin mengarah kepada controller welcome bisa dengan menghapus controller
		# atau uncomment header('Location: ' . BASEURL . 'kepo');
		#header('Location: ' . BASEURL . 'kepo');

		$this->view('Welcome');
	}
}