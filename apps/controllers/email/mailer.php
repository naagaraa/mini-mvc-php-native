<?php
namespace app\controllers\email;

use MiniMvc\Apps\Core\Bootstraping\Controller;
use MiniMvc\Apps\Core\Bootstraping\Request;

class mailer extends Controller
{

	public function __construct()
	{
		// code here if you have code constructor
	}

	/**
	 * Confirmation
	 * membuat template view email confirmation, yang menerima paramter data
	 * @return string
	 */
	public static function confirmation($data = [])
	{	
		// return string
		// view("email.confirmation");
		return template("confirmation", $data);
	}


	/**
	 * another template | example
	 * membuat template view email password reset, yang menerima paramter data
	 * @return string
	 */

	public static function password_reset($data = [])
	{	
		// return string
		// return template("confirmation", $data);
	}

	

}