<?php

/**
 * Documentasi Code
 */

class Userlist extends Controller
{
	public function __construct()
	{
		session_start();
	}
	public function index()
	{
		// init user info
		$this->lib('info')->getinfo();

		if (!isset($_SESSION['login'])) {
			header('Location:' . BASEURL . 'Dasshubodo');
			exit;
		}

		// cek jika bukan super admin / admin
		if ($_SESSION['level'] === '2') {
			header('Location:' . BASEURL . 'Dasshubodo');
			exit;
		}

		$data['judul'] = 'User List';
		$data['user'] = $this->model('User_model')->getAllUser();

		$this->view("templateadmin/index", $data);
		$this->view("templateadmin/Header");
		$this->view("admin/Userlist", $data);
		$this->view("templateadmin/Footer");
	}

	public function DeleteUser($id)
	{
			// cek jika bukan super admin / admin
			if ($_SESSION['level'] === '2') {
				header('Location:' . BASEURL . 'Dasshubodo');
				exit;
			}
		/**
		 * Belum Buat Pengecekan jika file gambar tidak ada
		 */
		$data['user'] = $this->model('User_model')->getUserId($id);
		$data['deaktif'] = $this->model('User_model')->deleteUserId($id);
		$filename = $data['user']['foto'];
		$path =  $_SERVER['DOCUMENT_ROOT'] . '/companyprofile/upload/user/' . $filename;

		if (file_exists($path)) {
			unlink($path);
			if (!unlink($path)) {
				echo "File Not Found or file Move";
				header('Location: ' . BASEURL . 'Userlist');
			} else {
				echo "You file has been Deleted";
				header('Location: ' . BASEURL . 'Userlist');
			}
			// var_dump('file ada');
		} elseif (!file_exists($path)) {
			header('Location: ' . BASEURL . 'Userlist');
			// var_dump('file tidak ada');
		}
		// unlink($path);
	}
}