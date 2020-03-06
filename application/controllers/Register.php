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
        $data1 = array(
            'user' => $this->input->post('user'),
            'password' => $this->input->post('password'),
            'status' => 'technician-unverified'
        );
        $this->register_model->post_technician($data1);
        redirect(site_url('register/register_technician'));
    }

    public function register_user()
    {
        $data['title'] = 'Register Customer';
        $this->load->view('header', $data, FALSE);
        $this->load->view('register-user', $data, FALSE);
    }

    public function register_user_process()
    {
        $data1 = array(
            'user' => $this->input->post('user'),
            'password' => $this->input->post('password'),
            'status' => 'customer-unverified'
        );
        $data2 = array(
            'user' => $this->input->post('user'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone')
        );
        $this->register_model->post_customer($data1, $data2);
        redirect(site_url('register/register_user'));
    }
}

/* End of file Register.php */
