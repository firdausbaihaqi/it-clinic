<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        
    }

    public function admin()
    {

    }

    public function technician()
    {
        $data['title'] = "Dashboard Teknisi";
        $this->load->view('header', $data, FALSE);
        $this->load->view('view-teknisi', $data, FALSE);
    }

    public function customer()
    {
        $data['title'] = "Dashboard Customer";
        $this->load->view('header', $data, FALSE);
        $this->load->view('view-user', $data, FALSE);
    }

    public function unverified()
    {
        
    }

}

/* End of file Dashboard.php */
