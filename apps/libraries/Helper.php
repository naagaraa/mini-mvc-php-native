<?php

Namespace MiniMvc\Apps\Libraries;
use MiniMvc\Apps\Core\Bootstraping\Error_Handling;
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
 * $helper->redirect_404();
 * $helper->redirect_403();
 * $helper->redirect_301();
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
			}else{
				return $url;
			}

		}
	}


	public function redirect($url = '' , $permanent = false)
	{
		/**
		 * Membuat function redirect url
		 * @author nagara 
		 */

		header('Location: ' . URL . $url, true, $permanent ? 301 : 302);
	}

	public function redirect_404()
	{
		/**
		 * Membuat function redirect_404 Not Found
		 * @author nagara 
		 */
		// prevent Browser cache for php site
		header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
		header('HTTP/1.1 404 Not Found');
		$error_handling = new Error_Handling;
		$error_handling->showerror_404();
	}

	public function redirect_403()
	{
		/**
		 * Membuat function redirect_403 Forbidden
		 * @author nagara 
		 */
		// prevent Browser cache for php site
		header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
		header('HTTP/1.1 403 Forrbidden');
		exit;
	}

	public function redirect_301($url = '' , $permanent = false)
	{
		/**
		 * Membuat function redirect_301 Moved permanent
		 * @author nagara 
		 */

		// prevent Browser cache for php site
		header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
		header('HTTP/1.1 301 Moved Permanetly');
		header('Location: ' . $url, true, $permanent ? 301 : 302);
		exit;
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

		return URL . $now_url;
	}
}