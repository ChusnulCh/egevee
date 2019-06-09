<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('Galang_model');
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("home/index");
        $this->load->view("admin/overview");
        $data["galang"]=$this->Galang_model->tampilDataGalang();
		$this->load->view("galang/tampil_galang", $data);
	}


}