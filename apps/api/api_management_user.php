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


class api_management_user extends API_Handling
{
	public function __construct()
	{
		// code here
	}

    // example Api 
	public function index()
	{
		// code here
        $data = [
            'id' => 1,
            'nama' => 'ekajayanagara',
            'jobs' => [
                'freelancer illustrattor',
                'junior dev',
                'student collegue'
            ],
            'status learning' => 'Learn in Internet',
            'hobby' => 'ngulik in bahasa sunda',
            'address' => 'indonesia',
            'city' => 'jakarta',
        ];

        echo json_encode($data, JSON_PRETTY_PRINT);
	}

	public function show_addres_by_id($request)
	{
        $id = $request;
		// code here
        $data = [
            'id' => $id,
            'address' => 'indonesia',
            'city' => 'jakarta',
        ];

        echo json_encode($data, JSON_PRETTY_PRINT);
	}

	public function show_hobby_by_id($request)
	{
        $id = $request;
		// code here
        $data = [
            'id' => $id,
            'status learning' => 'Learn in Internet',
            'hobby' => 'ngulik in bahasa sunda',
        ];

        echo json_encode($data, JSON_PRETTY_PRINT);
	}

}