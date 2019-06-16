<?php

class Delete_Galang extends CI_model{
	public function DeleteIdGalang($Id_Galangdana){ //fungsi delete berdasarkan id
	    $this->db->where('Id_Galangdana',$Id_Galangdana); //pencocokan id, dimana id_transaksi == inputan $id_transaksi
	    $this->db->delete('galang_dana'); //eksekusi
	    return;
	}
}