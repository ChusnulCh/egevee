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
		$this->load->view('templates/header', $data);
		$this->load->view('galang/index', $data); 
		$this->load->view('templates/footer');
	}

	//$this->load->database(); //load di satu method saja

	public function tambah_galang()
	{
		$data['judul']='Form Tambah Galang';

		$this->form_validation->set_rules('Judul', 'judul','required');

		if ($this->form_validation->run() == FALSE ) {
			$this->load->view('templates/header', $data);
			$this->load->view('galang/tambah_galang'); 
			$this->load->view('templates/footer');
		}else{
			$this->Galang_model->tambahDataGalang();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('galang');
		}

	}
}