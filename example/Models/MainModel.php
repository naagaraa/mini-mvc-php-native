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

	public function getall()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function get_data_by_condition($urlid)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE urlid=:urlid');
		$this->db->bind('urlid', $urlid);
		return $this->db->single();
	}


	public function insert_data($data)
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

	public function remove_data_by_condition($uniqid)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE uniqid=:uniqid');
		$this->db->bind('uniqid', $uniqid);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function update_data($data)
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