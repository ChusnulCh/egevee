<?php

class Home extends CI_Controller{
	public function index($nama = '')//method default
	{
		$data['judul'] = 'Halaman Home';
		$data['nama'] = $nama;
		$this->load->view('home/index', $data);
	} 

}