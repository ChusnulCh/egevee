<?php


class Galang_model extends CI_model{
	public function getAllGalang()
	{
		return $this->db->get('galang_dana')->result_array(); //galang = nama tabelnya

	}

	public function tambahDataGalang()
	{
		$data = [
		"Judul" => $this->input->post('Judul', true),
		];
		
		$this->db->insert('galang', $data);
	}
}