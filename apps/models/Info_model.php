<?php

/**
 * Documentasi Code
 */

class Info_model
{
	private $table = 'tb_info';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllInfoUser()
	{

		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}


	// public function deleteInfoId($id)
	// {
	// 	$this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
	// 	$this->db->bind('id', $id);

	// 	$this->db->execute();
	// 	return $this->db->rowCount();
	// }

	public function createInfoData($data)
	{
		// (`id`, `host`, `ip_address`, `akses_address`, `platform`, `sistem_operasi`, `date`);
		$query = "INSERT INTO $this->table VALUES ('', :host, :ip_address, :akses_address, :platform, :sistem_operasi, :waktu)";
		$this->db->query($query);

		// binding untuk data text
		$this->db->bind('host', $data['server']);
		$this->db->bind('ip_address', $data['remote_adr']);
		$this->db->bind('platform', $data['browser']);
		$this->db->bind('akses_address', $data['file_name']);
		$this->db->bind('sistem_operasi', $data['platform']);
		$this->db->bind('waktu', $data['date']);

		$this->db->execute();
		return $this->db->rowCount();
	}
}