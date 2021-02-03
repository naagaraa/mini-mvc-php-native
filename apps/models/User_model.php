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
 * tersedia, dan tersedia example code pada folder example
 */

class User_model
{
	private $table = 'tb_user';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	// code here
	public function getAllUser()
	{

		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSetArray();
	}

	public function getUserId($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		
		$this->db->bind('id', $id);
		return $this->db->singleArray();
	}

	public function deleteUserId($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function getUser($username, $password)
	{

		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_name=:user_name AND passw=:passw');

		$this->db->bind('user_name', $username);
		$this->db->bind('passw', $password);
		return $this->db->singleArray();
	}

	public function register($data)
	{
		// (`id`, `userid`, `nama`, `deskripsi`, `foto`, `user_name`, `passw`, `level`);
		$query = "INSERT INTO $this->table VALUES ('','',:nama,:deskripsi,:foto,:user_name,:passw,:level)";
		$this->db->query($query);

		// binding untuk data text
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('deskripsi', $data['deskripsi']);
		$this->db->bind('user_name', $data['username']);
		$this->db->bind('passw', $data['password']);
		$this->db->bind('level', $data['status']);

		// binding untuk data file
		$this->db->bind('foto', $data['image']);

		$this->db->execute();
		return $this->db->rowCount();
	}
}