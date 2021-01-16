<?php

use MiniMvc\Apps\Core\Bootstraping\Controller;

/**
 * Documentasi Code
 */

class Register extends Controller
{
	public function __construct()
	{
		session_start();
	}
	public function index()
	{
		// init user info

		$data['judul'] = 'Register';

		$this->view("templateadmin/index", $data);
		$this->view("templateadmin/Header");
		$this->view("admin/Add_User");
		$this->view("templateadmin/Footer");
	}

	public function registerUser()
	{
		// get value gambar
		$gambar = [
			'namaFile' => $this->lib('randName')->getRandomName($_FILES['foto']['name']),
			'tmpName' => $_FILES['foto']['tmp_name'],
			'typeFile' => $_FILES['foto']['type'],
			'sizeFile' => $_FILES['foto']['size'],
			'msgError' => $_FILES['foto']['error']
		];

		/**
		 *  Config File
		 *  buat directori file upload
		 *  mengambil eksitensi file tersebut
		 *  membuat config file exsitensi yang di izinkan
		 */
		$target_dir = $_SERVER['DOCUMENT_ROOT'] . '/companyprofile/upload/user/';
		$target_file = $target_dir . basename($gambar['namaFile']);
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		$extensions_arr = ["jpg", "jpeg", "png"];

		//  get value identitas
		$data = [
			'nama' => htmlspecialchars($_POST['nama']),
			'username' => htmlspecialchars($_POST['username']),
			'password' => md5(htmlspecialchars($_POST['password'])),
			'status' => htmlspecialchars($_POST['level']),
			'deskripsi' =>  $_POST['deskripsi'],
			'image' =>  $gambar['namaFile']
		];

		// Check extension image/file
		if (in_array($imageFileType, $extensions_arr)) {
			// Convert to base64 
			$image_base64 = base64_encode(file_get_contents($gambar['tmpName']));
			$image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
			// insert data
			if ($this->model('User_model')->register($data) > 0) {
				// jika sukses
				header('Location: ' . BASEURL . 'Userlist');
			}
			// move file
			move_uploaded_file($gambar['tmpName'], $target_dir . $gambar['namaFile']);
			exit;
		}
	}
}