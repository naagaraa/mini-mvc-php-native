<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;

use MiniMvc\Apps\Libraries\Helper;
use MiniMvc\Apps\Libraries\Upload;
use MiniMvc\Apps\Libraries\Info_Agent;

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