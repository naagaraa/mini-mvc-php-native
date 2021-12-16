<?php

namespace MiniMVC\System;

/**
 * ===============================================================================================
 * STORAGE 
 * @author nagara 
 * ===============================================================================================
 *  
 * storage ada file uploaded system native build from zero
 */
class Storage
{
	private $directory;

	#file config
	private $file_name;
	private $file_type;
	private $file_tmp;
	private $file_error;
	private $size;
	private static $ext = ["jpg", "jpeg", "png", "gif", "svg", "pdf", "doc", "docx", "txt"];

	/**
	 * 
	 */
	public function __construct()
	{
		$this->directory = getcwd() . DIRECTORY_SEPARATOR;
		dump($this->directory);
	}

	/**
	 * method for debug config (development)
	 * @author nagara
	 * @param array
	 */
	public function Config($config = [])
	{
		var_dump($config);
	}

	/**
	 * method for get Files 
	 * @author nagara
	 * @param string
	 * @return object
	 */
	private static function Files($name = "")
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
			throw $th;
		}
	}

	/**
	 * method for check files already or no in directory
	 * @author nagara
	 * @param string
	 * @return boolean
	 */
	private static function Already($files)
	{
		try {
			if (file_exists($files)) {
				# file sudah ada
				return false;
			} else {
				# file belum ada
				return true;
			}
		} catch (\Throwable $th) {
			//throw $th;
		}
	}

	/**
	 * method for convert image to base64
	 * @author nagara
	 * @param string
	 * @return string
	 */
	private static function ConvertImage($filename, $extention)
	{
		# convert image tmp to base64
		dump($filename);
		$file_base64 = base64_encode(file_get_contents($filename));
		$files = 'data:image/' . $extention . ';base64,' . $file_base64;
		return $files;
	}

	/**
	 * method for upload files image
	 * @author nagara
	 * @param string
	 * @return object
	 */
	public static function Upload($filename, $target_directory, $genereate_name = false)
	{
		# files checker
		$files = self::Files($filename);

		$name_of_file = "";
		if ($genereate_name == false) {
			$name_of_file = $files->file_name;
		} else {
			$name_of_file = random_file_name($files->file_name);
		}

		$files_path = $target_directory . basename($files->file_name);
		$extention = strtolower(pathinfo($files_path, PATHINFO_EXTENSION));

		if (in_array($extention, self::$ext)) {
			dump($files->file_tmp, $extention);
			# convert image tmp to base64
			self::ConvertImage($files->file_tmp, $extention);
			# check file already exits
			$already = self::Already($target_directory . $name_of_file);

			if ($already == false) echo "gagal";
			if ($already == true) {
				dump($files->file_tmp);
				dump($target_directory . $name_of_file);
				if (move_uploaded_file($files->file_tmp, $target_directory . $name_of_file)) {
					echo "file {$extention} berhasil di upload ";
					$image = [
						"image_original_name" => $files->file_name,
						"image_name" => $name_of_file,
						"image_type" => $files->file_type,
						"image_size" => $files->file_size,
						"image_error" => $files->file_error,
					];
					return (object) $image;
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			};
		}
	}

	/**
	 * method for remove files image
	 * @author nagara
	 * @param string
	 * @return boolean
	 */
	public static function RemoveFile($path_file_name = "")
	{
		# check jika file tidak ada.
		if (!file_exists($path_file_name)) {
			// echo "file tidak ada";
			return false;
		} else {
			unlink($path_file_name);
			// echo "success file berhasil di hapus";
			return true;
		}
	}

	/**
	 * method for remove files image
	 * @author nagara
	 * @param string
	 * @return boolean
	 */
	public function UpdateFile($path_old_files, $path_new_files, $target_directory, $genereate_name =  false)
	{
		#check file exist
		if (!file_exists($path_old_files)) {
			echo "maaf, filenya " . htmlspecialchars($path_old_files) . " tidak ada dalam direactory check nama filenya di controllernya";
			exit;
		};

		# remove file
		$success = self::RemoveFile($path_old_files);
		# move tmpt file ke dir temp
		if ($success == true) {
			if ($genereate_name == false) {
				echo "gambar berhasil di update";
				self::Upload($path_new_files, $target_directory, false);
			} else {
				echo "gambar berhasil di update";
				return self::Upload($path_new_files, $target_directory, true);
			}
		}
	}
}
