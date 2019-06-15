<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('Galang_model');
	}

	public function index() //fungsi awal
	{

        $this->load->view('home');
    }

    public function SelectDataGalang() //fungsi tampil data
    {
        $data["galang"]=$this->Galang_model->tampilDataGalang();
        $this->load->view('overview',$data);
		//$this->load->view("galang/tampil_galang", $data);
	}

	public function DeleteDataIdGalang($Id_Galangdana) //fungsi hapus
	{
	    $this->Galang_model->DeleteIdGalang($Id_Galangdana);
	    redirect('overview'); //redirect
	 
	}
}