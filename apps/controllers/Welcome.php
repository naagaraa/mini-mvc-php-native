<?php
defined('BASEURL') or exit('No direct script access allowed');

// php office vendor lib
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
		// var_dump($spreadsheet);


		// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
		// $dotenv->load();

		// var_dump($this->lib('Url')->geturl());


		// var_dump(__DIR__ . '/.env');
		// var_dump($_SERVER);
		$this->view('Welcome');


		// $dotenv = new Dotenv();
		// $dotenv->load(__DIR__ . '/.env');
	}
}