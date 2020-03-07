<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'IT Clinic';
        $this->load->view('header', $data, FALSE);
        $this->load->view('index', $data, FALSE);
    }
}

/* End of file Home.php */
