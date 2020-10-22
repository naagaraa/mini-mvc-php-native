<?php
defined('BASEURL') or exit('No direct script access allowed');

require 'vendor/autoload.php';
// php office vendor lib
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
// mpdf

class Welcome extends Controller
{

	public function __construct()
	{
		// $spreadsheet = new Spreadsheet();
		// $sheet = $spreadsheet->getActiveSheet();
	}

	public function index()
	{
		// var_dump($this->lib('Url')->geturl());
		$this->view('Welcome');
	}
}