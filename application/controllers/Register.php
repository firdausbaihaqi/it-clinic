<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function index()
    {
    }

    public function register_technician()
    {
        $data['title'] = 'Register Teknisi';
        $this->load->view('header', $data, FALSE);
        $this->load->view('register-teknisi', $data, FALSE);
    }
}

/* End of file Register.php */
