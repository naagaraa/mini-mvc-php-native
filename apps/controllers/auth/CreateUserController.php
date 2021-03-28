<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;

class CreateUserController extends Controller
{

	public function __construct()
	{
		// code here
		
	}

	public function index()
	{
		return view('auth/pages/register_view');
	}

	public function about()
	{
		
	}

}