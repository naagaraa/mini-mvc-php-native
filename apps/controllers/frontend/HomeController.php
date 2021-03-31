<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;

class HomeController extends Controller
{

	public function __construct()
	{
		// code here
		
	}

	public function index()
	{
		return view('/frontend/pages/home_view');
	}

}