<?php

namespace MiniMvc\Apps\Core\Bootstraping;

use \PDO;
use \PDOException;
use MiniMvc\Apps\Core\Bootstraping\Error_Handling;
/**
 * ===============================================================================================
 * Documentasi Code
 * @author sandhika and nagara
 * ===============================================================================================
 * 
 * config database wrapper menggunakan PDO
 */
class Database
{
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $db_name = DB_NAME;

	private $dbh;
	private $statement;

	public function __construct()
	{
		// data source name
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;

		$option = [
			PDO::ATTR_PERSISTENT => TRUE,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		];

		// atasi error
		try {
			//code...
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
		} catch (PDOException $exception) {
			//throw $e;
			$my_error = new Error_Handling;
			$my_error->showerror_message($exception->getMessage() , $exception->getFile() , $exception->getLine() , $exception->getTraceAsString());
			exit;
		}
	}

	/**
	 * 
	 * function untuk membuat query
	 * @author sandhika and nagara
	 */
	public function query($query)
	{
		$this->statement = $this->dbh->prepare($query);
	}

	/**
	 * 
	 * function untuk handle data binding
	 * @author sandhika and nagara
	 */
	public function bind($param, $value, $type =  null)
	{
		if (is_null($type)) {
			switch (true) {
				case is_int($value):
					# code...
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					#code
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					#code
					$type = PDO::PARAM_NULL;
					break;
				default:
					$type = PDO::PARAM_STR;
			}
		}

		$this->statement->bindValue($param, $value, $type);
	}

	/**
	 * 
	 * function untuk handle execute statement
	 * @author sandshika and nagara
	 */
	public function execute()
	{
		$this->statement->execute();
	}

	/**
	 * resultSetArray
	 * @author nagara
	 * 
	 * untuk menampilkan semua data query dengan array
	 * assosiatif foramt
	 */
	public function resultSetArray()
	{
		$this->execute();
		return $this->statement->fetchAll(PDO::FETCH_ASSOC);
	}

	/**
	 * resultSetJSON
	 * @author nagara
	 * 
	 * untuk menampilkan semua data query dengan JSON
	 * format
	 */
	public function resultSetJSON()
	{
		header('Content-Type: application/json');
		$this->execute();
		return json_encode($this->statement->fetchAll(PDO::FETCH_ASSOC), JSON_PRETTY_PRINT);
	}

	/**
	 * resultSetObject
	 * @author nagara
	 * untuk menampilkan semua data query dengan Object
	 * format
	 */
	public function resultSetObject()
	{
		$this->execute();
		return $this->statement->fetchAll(PDO::FETCH_OBJ);
	}

	/**
	 * singleArray
	 * @author nagara
	 * 
	 * untuk menampilkan single data query dengan array
	 * assosiatif format
	 */
	public function singleArray()
	{
		$this->execute();
		return $this->statement->fetch(PDO::FETCH_ASSOC);
	}

	/**
	 * singleJSON
	 * @author nagara
	 * 
	 * untuk menampilkan single data query dengan JSON
	 * format
	 */
	public function singleJSON()
	{
		header('Content-Type: application/json');
		$this->execute();
		return json_encode($this->statement->fetch(PDO::FETCH_ASSOC),  JSON_PRETTY_PRINT);
	}

	/**
	 * singleObject
	 * @author nagara
	 * 
	 * untuk menampilkan single data query dengan object
	 * format
	 */
	public function singleObject()
	{
		$this->execute();
		return $this->statement->fetch(PDO::FETCH_OBJ);
	}


	/**
	 * rowCount
	 * @author nagara
	 * 
	 * untuk menampilkan jumlah row yang ada pada tabel
	 */
	public function rowCount()
	{
		return $this->statement->rowCount();
	}
}