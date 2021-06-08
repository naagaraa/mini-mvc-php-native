<?php 
namespace MiniMVC\System;

class Storage
{
	private $directory;
	
	#file config
	private $file_name;
	private $file_type;
	private $file_tmp;
	private $file_error;
	private $size;
	private $ext =["jpg", "jpeg", "png"];

	public function __construct()
	{
		$this->directory = __DIR__ . DIRECTORY_SEPARATOR;
	}

	public function Files($name = "")
	{
		try {
			if ($name == "") { 
				echo "file name belum di input";
				exit;
			} else {

				$data = [
					"file_name" => $_FILES[$name]["name"],
					"file_type" => $_FILES[$name]["type"],
					"file_tmp" => $_FILES[$name]["tmp_name"],
					"file_error" => $_FILES[$name]["error"],
					"file_size" => $_FILES[$name]["size"]
				];

				return (object) $data;
			};
		} catch (\Throwable $th) {
			//throw $th;
		}
	}

	public function ConvertImage($filename){
		# convert image to base64
		$file_base64 = base64_encode(file_get_contents($filename));
		$coverImage = 'data:image/' . $imageCoverFileType . ';base64,' . $file_base64;
	}

	public function MoveFile($filename, $target_directory)
	{
		// check extension
		
		// move file to foler
		move_uploaded_file($filename, $target_directory);
		exit;
	}

	public function RemoveFile($filename = "")
	{
		# check jika file tidak ada.
		if ( !file_exists( __DIR__ . DIRECTORY_SEPARATOR . $filename) ) {
			echo "file tidak ada";
		}else {
			unlink($this->directory . DIRECTORY_SEPARATOR . $filename);
			echo "success file berhasil di hapus";
			return true;
		}
		exit;
	}

	public function UpdateFile($oldfiles, $newfiles){
		# remove file
		# move tmpt file ke dir temp
		# move file form temp ke storage dir
		self::RemoveFile($oldfiles);

	}

}

// $file = new Storage;
// $file->RemoveFile("downloads.php");