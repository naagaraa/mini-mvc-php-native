<?php

use MiniMvc\Core\Controller;

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

		$data['judul'] = 'User List';

		$this->view("templateadmin/index", $data);
		$this->view("templateadmin/Header");
		$this->view("admin/Userlist");
		$this->view("templateadmin/Footer");
	}

	public function DeleteUser($id)
	{
		// cek jika bukan super admin / admin
		if ($_SESSION['level'] === '2') {
			header('Location:' . URL . 'Dasshubodo');
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
				header('Location: ' . URL . 'Userlist');
			} else {
				echo "You file has been Deleted";
				header('Location: ' . URL . 'Userlist');
			}
			// var_dump('file ada');
		} elseif (!file_exists($path)) {
			header('Location: ' . URL . 'Userlist');
			// var_dump('file tidak ada');
		}
		// unlink($path);
	}
}