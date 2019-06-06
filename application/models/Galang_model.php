<?php


class Galang_model extends CI_model{
	public function getAllGalang()
	{
		return $this->db->get('galang_dana')->result_array(); //galang = nama tabelnya

	}

	public function tampilDataGalang()
	{
		$hasil = $this->db->query("SELECT * FROM galang_dana");

		return $hasil;
	}
}