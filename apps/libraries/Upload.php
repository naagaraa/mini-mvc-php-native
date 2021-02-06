<?php

Namespace MiniMvc\Apps\Libraries;

/**
 * ===============================================================================================
 * Documentasi Code
 * @author nagara 
 * ===============================================================================================
 * 
 * untuk menggunakan Upload yang ada disini silahkan panggil mengunakan nama namespacenya
 * lalu deklarasi sebuah object baru.
 * 
 * contoh :
 * use MiniMvc\Apps\Libraries\Upload;
 * 
 * $upload = new Upload;
 * 
 * $upload->random_name();
 * 
 */

class Upload 
{

	/**
	 * membuat function untuk handling random name pada file yang di upload 
	 * @author nagara 
	 */
	public function random_file_name($keyname = '')
	{
		// config generate uniq
		/* A uniqid, like: 4b3403665fea6 */

		// nama file
		$getNama = $keyname;

		// delete space
		$removeSpace = preg_replace('/\s+/', '', $getNama);

		// pisahkan dgn extentionnya
		$explodeFile = explode('.', $removeSpace);

		$namaFiles = $explodeFile[0];
		$extFiles = end($explodeFile);

		// buat nama baru  
		$file = md5(uniqid($namaFiles));

		// gabung file baru
		$new_file = $file . '.' . $extFiles;
		return $new_file;
	}

	// jika punya punya function lain
}