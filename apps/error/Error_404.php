<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;

/**
 * Documentasi Code
 */

class Error_404 extends Controller
{
	public function __construct()
	{
		// code here
	}

	public function index()
	{
		$this->error_view('error_404_v1');
	}
}