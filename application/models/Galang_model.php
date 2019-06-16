<?php


class Galang_model extends CI_model{
	public function getAllGalang(){
		return $this->db->get('galang_dana')->result_array();

	}

	public function tampilDataGalang(){
		$this->db->select('*');
		$this->db->join('user', 'galang_dana.Username = user.Username');
		$this->db->from('galang_dana');
		$query = $this->db->get();
		return $query->result();
	}
	
}