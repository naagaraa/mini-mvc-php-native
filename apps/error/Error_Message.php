<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;

/**
 * ===============================================================================================
 * Documentasi Code
 * @author nagara 
 * ===============================================================================================
 * 
 * pada file ini digunakan untuk handling error message, atau mengatasi
 * halaman yang tidak ditemukan, 
 */

class Error_Message extends Controller
{
	/**
	 * function untuk handle view message error
	 * @author nagara
	 */
	public function index($message = "", $file = '', $line = '', $trace = '' )
	{
		$jumlah = count(explode(' ', $trace));

		$data = [
			'message'   => $message,
			'route'		=> current_url(),
			'file'      => $file,
			'line'      => $line,
			'trace'     => explode(' ', $trace),
			'total'		=> $jumlah,
		];


		$trace = [];
		if( $jumlah > 20) {
			for ($i=0; $i <= 2 ; $i++) { 
				$trace[$i] = $data['trace'][$i] ;
			}
			$data = [
				'message'   => $message,
				'route'		=> current_url(),
				'file'      => $file,
				'line'      => $line,
				'trace'     => $trace,
				'total'		=> $jumlah,
			];

			$this->error_view('error_message', $data);
			exit;
		}else{
			$this->error_view('error_message', $data);
			exit;
		}
	}
}