<?php

/**
 * Documentasi Code
 */

class Contact_model
{
	private $table = 'tb_contact';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllContact()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getContactId($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	// public function getArtikelId($urlid)
	// {
	// 	$this->db->query('SELECT * FROM ' . $this->table . ' WHERE urlid=:urlid');
	// 	$this->db->bind('urlid', $urlid);
	// 	return $this->db->single();
	// }

	public function insertContact($data)
	{

		// (`id`, `nama`, `email`, `subject`, `pesan`, `tanggal`)
		$query = "INSERT INTO $this->table VALUES ('', :nama, :email, :subject, :pesan, :tanggal)";
		$this->db->query($query);

		// binding untuk data text
		$this->db->bind('nama', $data['name']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('subject', $data['subject']);
		$this->db->bind('pesan', $data['message']);
		$this->db->bind('tanggal', $data['tanggal']);

		$this->db->execute();
		return $this->db->rowCount();
	}
}