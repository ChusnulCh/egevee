<?php
class Login extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('User');
    }

    public function index() { 
        $this->load->view('login'); 
    } 

    public function proses_login() { 
        $user = $this->input->post('username'); 
        $pass = $this->input->post('password');

        $where = array('Username' => $user,'Password' => $pass);

        $cek = $this->User->cek_loginadmin("admin", $where)->num_rows();
        if($cek > 0){
            $data_session = array('nama' => $username,'status' => "login");
            $this->session->set_userdata($data_session);
 
            redirect(base_url("Home"));
 
        }else{
            echo "<script>alert('Username Atau Password Salah')</script>";
            $this->load->view('login');
        } 
    }
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('Login'));
    }
}