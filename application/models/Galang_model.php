<?php


class Galang_model extends CI_model{
	private $table='galang_dana';
	public function getAllGalang(){
		return $this->db->get($this->table);
		//return itu buat mengembalikan nilai ketika method dipanggil/ function dipanggil
		//db sebagai koneksi
		//get buat ngambil data

	}

	public function tampilDataGalang(){
		/*$this->db->select('*');
		$this->db->join('user', 'galang_dana.Username = user.Username');
		$this->db->from('galang_dana');
		$query = $this->db->get();
		return $query;*/
		
	}
	
}