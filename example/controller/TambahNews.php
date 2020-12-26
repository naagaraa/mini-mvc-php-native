<?php

use MiniMvc\Core\Controller;

/**
 * Documentasi Code
 */

class TambahNews extends Controller
{
	public function __construct()
	{
		session_start();
	}
	public function index()
	{
		// init user info

		$data['judul'] = 'Tambah News';

		$this->view("templateadmin/index", $data);
		$this->view("templateadmin/Header");
		$this->view("admin/Tambahnews");
		$this->view("templateadmin/Footer");
	}

	public function addArtikel()
	{

		$uniqid = uniqid();

		// get value gambar
		$coverArtikel = [
			'namaFile' => $this->lib('randName')->getRandomName($_FILES['cover']['name']),
			'tmpName' => $_FILES['cover']['tmp_name'],
			'typeFile' => $_FILES['cover']['type'],
			'sizeFile' => $_FILES['cover']['size'],
			'msgError' => $_FILES['cover']['error']
		];

		$artikelImage = [
			'namaFile' => $this->lib('randName')->getRandomName($_FILES['gambar']['name']),
			'tmpName' => $_FILES['gambar']['tmp_name'],
			'typeFile' => $_FILES['gambar']['type'],
			'sizeFile' => $_FILES['gambar']['size'],
			'msgError' => $_FILES['gambar']['error']
		];

		/**
		 *  Config File
		 *  buat directori file upload
		 *  mengambil eksitensi file tersebut
		 *  membuat config file exsitensi yang di izinkan
		 */
		$targetCoverArtikel_dir = $_SERVER['DOCUMENT_ROOT'] . '/companyprofile/upload/contents/cover/';
		$targetArtikelImage_dir = $_SERVER['DOCUMENT_ROOT'] . '/companyprofile/upload/contents/image/';


		$targetCoverArtikel_file = $targetCoverArtikel_dir . basename($coverArtikel['namaFile']);
		$targetArtikelImage_file = $targetArtikelImage_dir . basename($artikelImage['namaFile']);

		$imageCoverFileType = strtolower(pathinfo($targetCoverArtikel_file, PATHINFO_EXTENSION));
		$imageArtikelFileType = strtolower(pathinfo($targetArtikelImage_file, PATHINFO_EXTENSION));


		// extension yg di izinkan
		$extensions_arr = ["jpg", "jpeg", "png"];

		// buat zona time indonesia
		date_default_timezone_set('Asia/Jakarta');

		$title = htmlspecialchars($_POST['judul']);

		// create urlif fron title
		$lowercase = strtolower($title);
		$specChars = array(
			'!',    '"',
			'#',    	'$',    '%',
			'&amp;',    '\'',   '(',
			')',    	'*',    '+',
			',',    	'₹',    '.',
			'/-',   	 ':',    ';',
			'<',    	'=',    '>',
			'?',    	'@',    '[',
			'\\',   	']',    '^',
			'_',    	'`',    '{',
			'|',    	'}',    '~',
			'-----',    '----',    '---',
			'/',    	'--',   '/_',

		);

		$textRemoveSpesialChar = trim(str_replace($specChars, '', $lowercase));
		$urlId = str_replace(" ", "-", $textRemoveSpesialChar);
		// end urlid

		//  get value identitas
		$data = [
			'uniqid' => $uniqid,
			'urlid' => $urlId,
			'judul' => htmlspecialchars($_POST['judul']),
			'penulis' => htmlspecialchars($_POST['penulis']),
			'status' => htmlspecialchars($_POST['status']),
			'coverArtikel' => $coverArtikel['namaFile'],
			'imageArtikel' => $artikelImage['namaFile'],
			'content' => $_POST['content'],
			'current_visit' => 0,
			'remote_adr' => $_SERVER['REMOTE_ADDR'],
			'posting' => date('Y-m-d H:i:s', time())
		];


		// Check extension image/file
		if (in_array($imageCoverFileType, $extensions_arr) || in_array($imageArtikelFileType, $extensions_arr)) {

			// Convert cover to base64 
			$imagecover_base64 = base64_encode(file_get_contents($coverArtikel['tmpName']));
			$coverImage = 'data:image/' . $imageCoverFileType . ';base64,' . $imagecover_base64;

			// Convert image to base64 
			$imageartikel_base64 = base64_encode(file_get_contents($artikelImage['tmpName']));
			$imagerArtikel = 'data:image/' . $imageArtikelFileType . ';base64,' . $imageartikel_base64;

			$this->model('Visitor_model')->insertData($data);
			// insert data
			if ($this->model('Artikel_model')->insertArtikel($data) > 0) {
				// jika sukses
				header('Location: ' . BASEURL . 'ListNews');
			}
			// move file to foler
			move_uploaded_file($coverArtikel['tmpName'], $targetCoverArtikel_dir . $coverArtikel['namaFile']);
			move_uploaded_file($artikelImage['tmpName'], $targetArtikelImage_dir . $artikelImage['namaFile']);
			exit;
		}
	}
}