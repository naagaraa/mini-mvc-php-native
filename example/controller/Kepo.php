<?php

use MiniMvc\Apps\Core\Bootstraping\Controller;

/**
 * Documentasi Code
 */

class Kepo extends Controller
{
	public function __construct()
	{
		session_start();
	}

	public function index()
	{
		// init user info
		// $this->lib('info')->getinfo();

		$data['judul'] = 'Login';

		$this->view("templateadmin/index", $data);
		$this->view("admin/Login");
	}

	public function loginAja()
	{

		// $username = htmlspecialchars($_POST['username']);
		// $password = md5(htmlspecialchars($_POST['password']));

		// if ($username == "") {
		// 	$login_error_message = 'Username field is required!';
		// 	var_dump($login_error_message);
		// 	header('Location: ' . BASEURL . 'kepo');
		// } else if ($password == "") {
		// 	$login_error_message = 'Password field is required!';
		// 	var_dump($login_error_message);
		// 	header('Location: ' . BASEURL . 'kepo');
		// } else {
		// 	$data = $this->model('User_model')->getUser($username, $password);		 // check user login
		// 	if ($username == $data['user_name'] && $password == $data['passw']) {

		// 		$_SESSION['login'] = TRUE;
		// 		$_SESSION['username'] = $username;
		// 		$_SESSION['id'] = $data['id'];
		// 		$_SESSION['level'] = $data['level'];
		// 		$_SESSION['foto'] = $data['foto'];
		// 		$_SESSION['login_time'] = date('Y-m-d');

		// 		header('Location:' . BASEURL . 'Dasshubodo');
		// 		exit;
		// 	} else {
		// 		echo '<script>alert("username atau password anda salah")</script>';
		// 		header('Location: ' . BASEURL . 'kepo');
		// 	}
		// }
	}

	public function Logout()
	{
		// start session
		session_start();

		// Destroy user session
		// unset($_SESSION['login']);
		// unset($_SESSION['name']);
		// unset($_SESSION['id']);
		// unset($_SESSION['status']);
		// unset($_SESSION['foto']);
		// unset($_SESSION['login_time']);
		// $_SESSION = [];
		// $_COOKIE = [];

		// Redirect to index.php page
		header("Location: " . URL . 'Kepo');
	}
}