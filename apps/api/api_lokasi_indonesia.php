<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\API_Handling;

    /**
     * -----------------------------------------------------------------------
     * Documentasi Code
     * @author nagara
     * -----------------------------------------------------------------------
     * untuk membuat data api berformat JSON silahkan lakukan hal yang sama 
     * pada controller yakni memanggil models-nya
     *  $this->model('namaModels)->method()
     */


class api_lokasi_indonesia extends API_Handling
{
	public function __construct()
	{
		// code here
	}

    // example Api 
	public function index()
	{
        $url = "https://dev.farizdotid.com/api/daerahindonesia/provinsi";
        echo get_rest_api($url);
	}
}