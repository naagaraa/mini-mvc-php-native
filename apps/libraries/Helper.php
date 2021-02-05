<?php

Namespace MiniMvc\Apps\Libraries;

/**
 * ===============================================================================================
 * Documentasi Code
 * @author nagara 
 * ===============================================================================================
 * 
 * untuk menggunakan Helper yang ada disini silahkan panggil mengunakan nama namespacenya
 * lalu deklarasi sebuah object baru.
 * 
 * contoh :
 * use MiniMvc\Apps\Libraries\Helper;
 * 
 * $helper = new Helper;
 * 
 * $helper->get_url();
 * $helper->current_url();
 * $helper->redirect();
 * 
 */

class Helper
{

	// function getUrl user akses
	public function get_url($index = '')
	{
		/**
		 * membuat function get url berdasarkan index  atau routing
		 * @author nagara
		 */
		# code...
		if (isset($_GET['url'])) {
			/**
			 *  Merapikan url menggukan method rtrim untuk menhapus / dibagian akhir url
			 * 	mengamankan url dari variabel aneh dengan method Filter_var 
			 *  memecar URL menjadi array dengan method explode setiap bertemu string atau karakter /
			 */
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);

			if ($index !== '') {
				return $url[$index];
				exit();
			}else{
				return $url;
				exit();
			}

		}
	}


	public function redirect($url = '' , $permanent = false)
	{
		/**
		 * Membuat function redirect
		 * @author nagara 
		 */

		header('Location: ' . URL . $url, true, $permanent ? 301 : 302);
		exit();
	}


	public function current_url()
	{
		/**
		 * membuat function URL saat ini
		 * @author nagara 
		 */
		$now_url = '';
		$url = $this->get_url();
		foreach ($url as $route ) {
			$now_url .= $route . '/';
		}

		echo URL . $now_url;
		exit();
	}
}