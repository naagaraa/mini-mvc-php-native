<?php

use MiniMvc\Apps\Core\Bootstraping\Controller;

/**
 * Documentasi Code
 */

class Listnews extends Controller
{
	public function __construct()
	{
		session_start();
	}
	public function index()
	{
		// init user info
		// $this->lib('info')->getinfo();

		// if (!isset($_SESSION['login'])) {
		// 	header('Location:' . BASEURL . 'Kepo');
		// 	exit;
		// }

		$data['judul'] = 'List News';
		$data['listNews'] = $this->model('Artikel_model')->getAllArtikel();

		$this->view("templateadmin/index", $data);
		$this->view("templateadmin/Header");
		$this->view("admin/Listnews");
		$this->view("templateadmin/Footer");
	}

	public function DeleteArtikel($uniqid)
	{
		/**
		 * Note Belum Buat Pengecekan jika file gambar tidak ada
		 */

		$data['artikel'] = $this->model('Artikel_model')->getArtikelUniqId($uniqid);

		$fileNameCover = $data['artikel']['cover'];
		$fileNameImage = $data['artikel']['image'];

		$path = [
			'cover' =>  $_SERVER['DOCUMENT_ROOT'] . '/companyprofile/upload/contents/cover/' . 	$fileNameCover,
			'image' =>  $_SERVER['DOCUMENT_ROOT'] . '/companyprofile/upload/contents/image/' . 	$fileNameImage,
		];

		if (file_exists($path['cover']) and file_exists($path['image'])) {
			/*
			* delete file cover then
			* delete file image
			*/
			$data['deaktifArtikel'] = $this->model('Artikel_model')->deleteArtikelUniqId($uniqid);
			$data['deaktifVisitor'] = $this->model('Visitor_model')->deleteDataUniqId($uniqid);

			unlink($path['cover']);
			unlink($path['image']);
			header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
			header("Cache-Control: post-check=0, pre-check=0", false);
			header("Pragma: no-cache");
			header('Location: ' . BASEURL . 'ListNews');
		} elseif (!file_exists($path['cover']) or file_exists($path['image'])) {

			// delete
			$data['deaktifArtikel'] = $this->model('Artikel_model')->deleteArtikelUniqId($uniqid);
			$data['deaktifVisitor'] = $this->model('Visitor_model')->deleteDataUniqId($uniqid);

			unlink($path['cover']);
			unlink($path['image']);
			header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
			header("Cache-Control: post-check=0, pre-check=0", false);
			header("Pragma: no-cache");
			header('Location: ' . BASEURL . 'ListNews');
		} elseif (file_exists($path['cover']) or !file_exists($path['image'])) {

			// delete
			$data['deaktifArtikel'] = $this->model('Artikel_model')->deleteArtikelUniqId($uniqid);
			$data['deaktifVisitor'] = $this->model('Visitor_model')->deleteDataUniqId($uniqid);

			unlink($path['cover']);
			unlink($path['image']);
			header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
			header("Cache-Control: post-check=0, pre-check=0", false);
			header("Pragma: no-cache");
			header('Location: ' . BASEURL . 'ListNews');
		}
	}

	public function publishArtikel($urlid)
	{
		$uniqid = uniqid();

		$data['artikel'] = $this->model('Artikel_model')->getArtikelId($urlid);
		$status = 1;

		$data = [
			'id' => $data['artikel']['id'],
			'uniqid' => $data['artikel']['uniqid'],
			'judul' =>  $data['artikel']['judul'],
			'penulis' =>  $data['artikel']['penulis'],
			'status' => $status,
			'coverArtikel' => $data['artikel']['cover'],
			'imageArtikel' => $data['artikel']['image'],
			'content' => $data['artikel']['artikel'],
			'posting' => date('Y-m-d H:i:s', time())
		];

		// insert data
		if ($this->model('Artikel_model')->statusArtikelId($data) > 0) {
			// jika sukses
			header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
			header("Cache-Control: post-check=0, pre-check=0", false);
			header("Pragma: no-cache");
			header('Location: ' . BASEURL . 'ListNews');
		}
	}

	public function unpulishArtikel($urlid)
	{
		$uniqid = uniqid();

		$data['artikel'] = $this->model('Artikel_model')->getArtikelId($urlid);
		$status = 0;

		$data = [
			'id' => $data['artikel']['id'],
			'uniqid' => $data['artikel']['uniqid'],
			'judul' =>  $data['artikel']['judul'],
			'penulis' =>  $data['artikel']['penulis'],
			'status' => $status,
			'coverArtikel' => $data['artikel']['cover'],
			'imageArtikel' => $data['artikel']['image'],
			'content' => $data['artikel']['artikel'],
			'posting' => date('Y-m-d H:i:s', time())
		];

		// insert data
		if ($this->model('Artikel_model')->statusArtikelId($data) > 0) {
			// jika sukses
			header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
			header("Cache-Control: post-check=0, pre-check=0", false);
			header("Pragma: no-cache");
			header('Location: ' . BASEURL . 'ListNews');
		}
	}
}