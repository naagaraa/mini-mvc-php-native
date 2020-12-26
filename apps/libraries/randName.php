<?php

use MiniMvc\Core\Controller;

/**
 * Documentasi Code
 */

class randName extends Controller
{

	// function getinfo user akses
	public function getRandomName($key)
	{
		// config generate uniq
		/* A uniqid, like: 4b3403665fea6 */

		// nama file
		$getNama = $key;

		// delete space
		$removeSpace = preg_replace('/\s+/', '', $getNama);

		// pisahkan dgn extentionnya
		$explodeFile = explode('.', $removeSpace);
		$namaFiles = $explodeFile[0];
		$extFiles = $explodeFile[1];

		// buat nama baru  
		$image = md5(uniqid($namaFiles));

		// gabung file baru
		$txt = $image . '.' . $extFiles;
		return $txt;
	}
}