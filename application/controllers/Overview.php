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
		$data['galangdana']=$this->Galang_model->getAllGalang()->result();
        $this->load->view('overview',$data);
    }

}