<?php

class Galang extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Galang_model');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$data['judul']='Daftar Galang Dana';
		$data['galang'] = $this->Galang_model->getAllGalang();
		$this->load->view('galang/overview', $data);
		$this->load->view('galang/index', $data);
	}

	//$this->load->database(); //load di satu method saja

	public function overview()
	{
		$data['judul']='Form Tampil Galang';

		if ($this->form_validation->run() == FALSE ) {
			$this->load->view('galang/overview', $data);
			$x['data']=$this->Galang_model->tampilDataGalang();
			$this->load->view('galang/overview',$x);
		}else{
			$this->Galang_model->tampilDataGalang();
			$this->session->set_flashdata('flash', 'Ditampilkan');
			redirect('galang');
		}

	}
}