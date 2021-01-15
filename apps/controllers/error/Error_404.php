<?php
// defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Core\Controller;

/**
 * Documentasi Code
 */

class Error_404 extends Controller
{
	public function __construct()
	{
		// code ...
	}

	public function index()
	{
		$this->view('error/error_404_1');
	}
}