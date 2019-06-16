<?php

class Delete_Galang extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->model('Galang_model');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}	

	public function index(){//fungsi awal
        $this->load->view('overview');
    }

	public function DeleteDataIdGalang($Id_Galangdana){ //fungsi hapus
	    $this->Galang_model->DeleteIdGalang($Id_Galangdana);
	    redirect('overview'); //redirect
	 
	}
}