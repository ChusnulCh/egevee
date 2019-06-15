<?php

class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	public function index(){
		$this->load->view('home');
	} 

}