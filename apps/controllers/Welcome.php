<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;

// php office vendor libraries
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Welcome extends Controller
{

	public function __construct()
	{
		// code here
	}

	public function index()
	{
		$this->view('Welcome');
	}

	public function show()
	{
		phpinfo();
	}
}