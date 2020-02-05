<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function Login()
    {
        $this->load->view('Front/template/header');
        $this->load->view('Front/Login_page');
        $this->load->view('Front/template/footer');
    }

    public function Forgot_password()
    {
        $this->load->view('Front/template/header');
        $this->load->view('Front/Forgot_password');
        $this->load->view('Front/template/footer');
    }

    public function Verifikasi_email()
    {
        $this->load->view('Front/template/header');
        $this->load->view('Front/Verifikasi_email');
        $this->load->view('Front/template/footer');
    }
}


?>