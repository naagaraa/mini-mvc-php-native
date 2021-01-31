<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;

class AboutController extends Controller
{

	public function __construct()
	{
        // code here
	}

	public function index()
	{
        echo "<br>";
		echo "AboutController / index";
	}

	public function show($request)
	{
        echo "<br>";
		echo "AboutController / show";
	}
}