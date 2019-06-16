<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('Galang_model');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index() //fungsi awal
	{

        $this->load->view('overview');
    }

    public function SelectDataGalang() //fungsi tampil data
    {
        $data["galang"]=$this->Galang_model->tampilDataGalang();
        $this->load->view('overview',$data);
		//$this->load->view("galang/tampil_galang", $data);
	}


}