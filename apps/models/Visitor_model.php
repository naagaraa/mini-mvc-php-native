<?php

use MiniMvc\Core\Database;

/**
 * Documentasi Code
 */

class Visitor_model
{
	private $table = 'tb_visitor';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllInfoVisitor()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getAllRowVisitor()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		$this->db->execute();
		return $this->db->rowCount();
	}

	public function getInfoVisitId($urlid)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE urlid=:urlid');
		$this->db->bind('urlid', $urlid);
		return $this->db->single();
	}

	public function getInfoVisitUniqId($uniqid)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE uniqid=:uniqid');
		$this->db->bind('uniqid', $uniqid);
		return $this->db->single();
	}


	public function insertData($data)
	{
		// INSERT INTO `tb_visitor`(`id`, `urlid`,`uniqid`, `judul_content`, `visit_views`, `visitor_ip`, `date`) 
		$query = "INSERT INTO $this->table VALUES ('',:uniqid , :urlid, :judul_content, :visit_views, :visitor_ip, :waktu)";
		$this->db->query($query);

		// binding untuk data text
		$this->db->bind('uniqid', $data['uniqid']);
		$this->db->bind('urlid', $data['urlid']);
		$this->db->bind('judul_content', $data['judul']);
		$this->db->bind('visit_views', $data['current_visit']);
		$this->db->bind('visitor_ip', $data['remote_adr']);
		$this->db->bind('waktu', $data['posting']);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function deleteDataUniqId($uniqid)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE uniqid=:uniqid');
		$this->db->bind('uniqid', $uniqid);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function UpdateData($data)
	{
		// UPDATE `tb_visitor` SET `id`=[value-1],`urlid`=[value-2],`judul_content`=[value-3],`visit_views`=[value-4],`visitor_ip`=[value-5],`waktu`=[value-6] WHERE 1
		$query = "UPDATE " . $this->table . " SET id=:id, uniqid=:uniqid, urlid=:urlid, judul_content=:judul_content, visit_views=:visit_views, visitor_ip=:visitor_ip, waktu=:waktu WHERE uniqid=:uniqid";
		$this->db->query($query);

		// binding untuk data text
		$this->db->bind('id', $data['id']);
		$this->db->bind('uniqid', $data['uniqid']);
		$this->db->bind('urlid', $data['urlid']);
		$this->db->bind('judul_content', $data['judul_content']);
		$this->db->bind('visit_views', $data['visit_views']);
		$this->db->bind('visitor_ip', $data['visitor_ip']);
		$this->db->bind('waktu', $data['waktu']);

		$this->db->execute();
		return $this->db->rowCount();
	}
}