<?php
class Login extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('User')
    }
    public function index() { 
        $this->load->view('halaman_login'); 
    } 

    public function proses_login() { 
        $user = $this->input->post('Username'); 
        $pass = $this->input->post('Password'); 

        $where = array('Username' => $username,
                       'Password' => $password);
        $cek = $this->Login->cek_login("user", $where)->num_rows();
        if($cek > 0){
            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
 
            redirect(base_url("overview"));
 
        }else{
            echo "<script>alert('Username Atau Password Salah')</script>";
            $this->load->view('login');
        } 
    }
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('index'));
    }
}