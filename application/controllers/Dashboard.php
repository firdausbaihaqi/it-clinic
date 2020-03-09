<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        if ($this->session->userdata('status') == '') {
            $this->session->set_flashdata('message', 'Harap login terlebih dahulu');
            redirect('login');
        }
    }


    public function index()
    {
        if ($this->session->userdata('status') == 'admin') {
            redirect('dashboard/admin');
        } else if ($this->session->userdata('status') == 'technician') {
            redirect('dashboard/technician');
        } else if ($this->session->userdata('status') == 'customer'){
            redirect('dashboard/customer');
        } else if ($this->session->userdata('status') == 'technician-unverified'){
            redirect('dashboard/unverified');
        } else if ($this->session->userdata('status') == 'customer-unverified'){
            redirect('dashboard/unverified');
        }
    }

    public function admin()
    {
        if ($this->session->userdata('status') != 'admin') {
            redirect('dashboard');
        }
        echo "ndang digarap ki";
    }

    public function technician()
    {
        if ($this->session->userdata('status') != 'technician') {
            redirect('dashboard');
        }
        $data['title'] = "Dashboard Teknisi";
        $this->load->view('header', $data, FALSE);
        $this->load->view('view-teknisi', $data, FALSE);
    }

    public function customer()
    {
        if ($this->session->userdata('status') != 'customer') {
            redirect('dashboard');
        }
        $data['title'] = "Dashboard Customer";
        $this->load->view('header', $data, FALSE);
        $this->load->view('view-user', $data, FALSE);
    }

    public function unverified()
    {
        if ($this->session->userdata('status') != 'technician-unverified' || $this->session->userdata('status') != 'customer-unverified') {
            redirect('dashboard');
        }
        echo "Sabar bujang";
    }
}

/* End of file Dashboard.php */
