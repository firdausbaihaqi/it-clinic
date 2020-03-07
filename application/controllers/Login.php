<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('login_model');
        $this->session->set_userdata('status', '');
    }

    public function index()
    {
        $data['title'] = 'Login';
        $this->load->view('header', $data, FALSE);
        $this->load->view('sign-in', $data, FALSE);
    }

    public function verify()
    {
        $user = $this->input->post('user');
        $password = $this->input->post('password');
        $this->login_model->process($user, $password);
    }

    public function logout()
    {
        session_destroy();
        redirect('login');
    }
}

/* End of file Login.php */
