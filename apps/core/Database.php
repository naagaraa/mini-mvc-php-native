<?php

namespace MiniMvc\Apps\Core\Bootstraping;

use \PDO;

/**
 * -------------------------------------------------------------
 * Documentasi Code Database Wrapper PDO
 * Author : Nagara
 * -------------------------------------------------------------
 * 
 * config database wrapper menggunakan PDO, atau PHP data object
 * semua yang ada disini ditulis dengan konsep PDO, untuk lebih
 * jelasnya dan memahami konsep PDO silahkan buka documentasi
 * resminya. https://www.php.net/manual/en/book.pdo.php 
 * pada intinya semua handling core query
 * berada disini.
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
		} catch (PDOException $e) {
			//throw $e;
			die($e->getMessage());
		}
	}

	// membuat generate query
	public function query($query)
	{
		$this->statement = $this->dbh->prepare($query);
	}

	// data binding
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

	public function execute()
	{
		$this->statement->execute();
	}

	/**
	 * @resultset
	 * 
	 * untuk menampilkan semua data query dengan format array
	 * assosiatif
	 */
	public function resultSet()
	{
		$this->execute();
		return $this->statement->fetchAll(PDO::FETCH_ASSOC);
	}

	/**
	 * @single
	 * 
	 * untuk menampilkan single data query dengan format array
	 * assosiatif
	 */
	public function single()
	{
		$this->execute();
		return $this->statement->fetch(PDO::FETCH_ASSOC);
	}
	/**
	 * @rowCount
	 * 
	 * untuk menampilkan jumlah row yang ada pada tabel
	 */
	public function rowCount()
	{
		return $this->statement->rowCount();
	}
}