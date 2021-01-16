<?php

/**
 * ----------------------------------------------------------------------
 *  Documentasi - Login function example
 *  Author : Nagara
 * ----------------------------------------------------------------------
 */

$username = htmlspecialchars($_POST['username']);													# get field attribute name username dengan metode POST
$password = md5(htmlspecialchars($_POST['password']));      							# get field arttribute name password dengan metode POST  

if ($username == "") {
	$login_error_message = 'Username field is required!';
	header('Location: ' . BASEURL . 'namecontroller');
} else if ($password == "") {
	$login_error_message = 'Password field is required!';
	header('Location: ' . BASEURL . 'namecontroller');
} else {

	/**
	 * cek ketertersidiaan user pada database dengan model menggunakan
	 * function getUser yang terletak pada file model
	 */
	$data = $this->model('User_model')->getUser($username, $password);
	if ($username == $data['user_name'] && $password == $data['passw']) {

		$_SESSION['login'] = TRUE;
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $data['id'];
		$_SESSION['level'] = $data['level'];
		$_SESSION['foto'] = $data['foto'];
		$_SESSION['login_time'] = date('Y-m-d');

		header('Location:' . BASEURL . 'namecontroller');
		exit;
	} else {
		echo '<script>alert("username atau password anda salah")</script>';
		header('Location: ' . BASEURL . 'namecontroller');
	}
}


/**
 * ----------------------------------------------------------------------
 *  Documentasi - logout function example
 * ----------------------------------------------------------------------
 */

// start session
session_start();

// Destroy user session
unset($_SESSION['login']);
unset($_SESSION['name']);
unset($_SESSION['id']);
unset($_SESSION['status']);
unset($_SESSION['foto']);
unset($_SESSION['login_time']);
$_SESSION = [];
$_COOKIE = [];

// Redirect to index.php page
header("Location: " . URL . 'namecontroller');