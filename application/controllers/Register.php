<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('register_model');
    }

    public function index()
    {
    }

    public function register_technician()
    {
        $data['title'] = 'Register Teknisi';
        $this->load->view('header', $data, FALSE);
        $this->load->view('register-teknisi', $data, FALSE);
    }

    public function register_technician_process()
    {
        $this->register_model->post_technician();
        redirect(site_url('register/register_technician'));
    }

    public function register_customer()
    {
        $data['title'] = 'Register Customer';
        $this->load->view('header', $data, FALSE);
        $this->load->view('register-user', $data, FALSE);
    }

    public function register_customer_process()
    {
        $this->register_model->post_customer();
        redirect(site_url('register/register_customer'));
    }

    
}

/* End of file Register.php */
