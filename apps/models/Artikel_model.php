<?php

use MiniMvc\Core\Database;

/**
 * Documentasi Code
 */

class Artikel_model
{
	private $table = 'tb_artikel';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllArtikel()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getAllRowArtikel()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		$this->db->execute();
		return $this->db->rowCount();
	}

	public function getLimitArtikel($start, $mulai)
	{

		// $this->db->query('SELECT * FROM ' . $this->table . 'LIMIT startData , jumlahDataPerhalaman ');
		$this->db->query('SELECT * FROM ' . $this->table . ' LIMIT :startData , :jumlahDataPerhalaman ');
		$this->db->bind(':startData', $start);
		$this->db->bind('jumlahDataPerhalaman', $mulai);
		return $this->db->resultSet();
	}

	public function getLimitSideArtikel()
	{

		$this->db->query('SELECT * FROM ' . $this->table . ' order by posting DESC limit 8');
		// $this->db->bind(':startData', 0);
		// $this->db->bind('jumlahDataPerhalaman', 5);
		return $this->db->resultSet();
	}

	public function getSearchArtikel($key)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE judul LIKE :keyword;');
		$this->db->bind(':keyword', '%' . $key . '%');
		$this->db->execute();
		$this->db->rowCount();
		return $this->db->resultSet();
	}

	public function getSearch($key)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE judul LIKE :keyword;');
		$this->db->bind(':keyword', '%' . $key . '%');
		$this->db->execute();
		return	$this->db->rowCount();
	}

	public function getArtikelId($urlid)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE urlid=:urlid');
		$this->db->bind('urlid', $urlid);
		return $this->db->single();
	}

	public function getArtikelUniqId($uniqid)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE uniqid=:uniqid');
		$this->db->bind('uniqid', $uniqid);
		return $this->db->single();
	}
	public function deleteArtikelUniqId($uniqid)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE uniqid=:uniqid');
		$this->db->bind('uniqid', $uniqid);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function insertArtikel($data)
	{

		// (`id`,`uniqid`, `urlid`, `judul`, `status`, `artikel`, `penulis`, `cover`, `image`, `posting`)
		$query = "INSERT INTO $this->table VALUES ('',:uniqid, :urlid,:judul,:status,:artikel,:penulis,:cover,:image,:posting)";
		$this->db->query($query);

		// binding untuk data text
		$this->db->bind('uniqid', $data['uniqid']);
		$this->db->bind('urlid', $data['urlid']);
		$this->db->bind('judul', $data['judul']);
		$this->db->bind('status', $data['status']);
		$this->db->bind('artikel', $data['content']);
		$this->db->bind('penulis', $data['penulis']);
		$this->db->bind('posting', $data['posting']);

		// binding untuk data file
		$this->db->bind('cover', $data['coverArtikel']);
		$this->db->bind('image', $data['imageArtikel']);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function updateArtikel($data)
	{

		// (`id`, `urlid`, `judul`, `status`, `artikel`, `penulis`, `cover`, `image`, `posting`)
		$query = "UPDATE " . $this->table . " SET id=:id, uniqid=:uniqid, urlid=:urlid, judul=:judul, status=:status, artikel=:artikel, penulis=:penulis, cover=:cover, image=:image, posting=:posting WHERE id=:id";
		$this->db->query($query);

		// binding untuk data text
		$this->db->bind('id', $data['id']);
		$this->db->bind('uniqid', $data['uniqid']);
		$this->db->bind('urlid', $data['urlid']);
		$this->db->bind('judul', $data['judul']);
		$this->db->bind('status', $data['status']);
		$this->db->bind('artikel', $data['content']);
		$this->db->bind('penulis', $data['penulis']);
		$this->db->bind('posting', $data['posting']);

		// binding untuk data file
		$this->db->bind('cover', $data['coverArtikel']);
		$this->db->bind('image', $data['imageArtikel']);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function statusArtikelId($data)
	{

		// (`id`, `urlid`, `judul`, `status`, `artikel`, `penulis`, `cover`, `image`, `posting`)
		$query = "UPDATE " . $this->table . " SET id=:id, uniqid=:uniqid, urlid=':urlid', judul=:judul, status=:status, artikel=:artikel, penulis=:penulis, cover=:cover, image=:image, posting=:posting WHERE id=:id";
		$this->db->query($query);

		// binding untuk data text
		$this->db->bind('id', $data['id']);
		$this->db->bind('uniqid', $data['uniqid']);
		$this->db->bind('urlid', $data['urlid']);
		$this->db->bind('judul', $data['judul']);
		$this->db->bind('status', $data['status']);
		$this->db->bind('artikel', $data['content']);
		$this->db->bind('penulis', $data['penulis']);
		$this->db->bind('posting', $data['posting']);

		// binding untuk data file
		$this->db->bind('cover', $data['coverArtikel']);
		$this->db->bind('image', $data['imageArtikel']);

		$this->db->execute();
		return $this->db->rowCount();
	}
}