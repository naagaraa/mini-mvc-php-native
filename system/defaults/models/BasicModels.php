<?php

use MiniMvc\Apps\Core\Bootstraping\Database;

/**
 * -----------------------------------------------------------------------
 * Documentasi Code
 * -----------------------------------------------------------------------
 * 
 * untuk melakukan query pada tabel dalam database silahkan lakukan disini
 * query dibuat dalam bentuk public function yang nantinya akan digunakan
 * pada controller. berikut ini adalah example dari models yang
 * tersedia,
 */

class MainModel
{
	private $table = 'tb_name';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	/**
	 * method for get all data
	 * @author nagara
	 * @return array
	 */
	public function all()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSetArray();
	}

	/**
	 * method for get all data by condition
	 * @author nagara
	 * @return array
	 */
	public function select_where($value)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE column=:value');
		$this->db->bind('value', $value);
		return $this->db->singleArray();
	}


	/**
	 * method for insert data
	 * @author nagara
	 */
	public function save($data)
	{
		// query
		$query = "INSERT INTO $this->table VALUES ('',:column1 , :column2, :column3, :column4)";
		$this->db->query($query);

		// binding untuk data text
		$this->db->bind('column1', $data['column1']);
		$this->db->bind('column2', $data['column2']);
		$this->db->bind('column3', $data['column3']);
		$this->db->bind('column4', $data['column4']);

		$this->db->execute();
		return $this->db->rowCount();
	}

	/**
	 * method for delete data by condition or where
	 * @author nagara
	 */
	public function delete($value)
	{
		// query
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE column=:value');
		$this->db->bind('value', $value);

		$this->db->execute();
		return $this->db->rowCount();
	}

	/**
	 * method for update data by condition 
	 * @author nagara
	 */
	public function update($data)
	{
		// query
		$query = "UPDATE " . $this->table . " SET id=:id, column1=:column1, column2=:column2, column3=:column3, column4=:column4";
		$this->db->query($query);

		// binding untuk data text
		$this->db->bind('id', $data['id']);
		$this->db->bind('column1', $data['column1']);
		$this->db->bind('column2', $data['column2']);
		$this->db->bind('column3', $data['column3']);
		$this->db->bind('column4', $data['column4']);

		$this->db->execute();
		return $this->db->rowCount();
	}
}