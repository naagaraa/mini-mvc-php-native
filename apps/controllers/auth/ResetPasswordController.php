<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;

class ResetPasswordController extends Controller
{

	public function __construct()
	{
		// code here
		
	}

	public function index()
	{
		return view('auth/pages/password/reset_password_view');
	}

	public function about()
	{
		
	}

}