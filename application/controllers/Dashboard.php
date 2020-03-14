<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('admin_model');
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
        } else if ($this->session->userdata('status') == 'customer') {
            redirect('dashboard/customer');
        } else if ($this->session->userdata('status') == 'technician-unverified') {
            redirect('dashboard/unverified');
        } else if ($this->session->userdata('status') == 'customer-unverified') {
            redirect('dashboard/unverified');
        }
    }

    public function admin()
    {
        if ($this->session->userdata('status') != 'admin') {
            redirect('dashboard');
        }
        $data['title'] = "Dashboard Admin";
        $data['notify'] = $this->admin_model->notify_unverified_account();
        $data['unverified_account'] = $this->admin_model->get_unverified_account();
        $this->load->view('header', $data, FALSE);
        $this->load->view('admin/dashboard-admin', $data, FALSE);
    }

    public function admin_verify_account()
    {
        if ($this->session->userdata('status') != 'admin') {
            redirect('dashboard');
        }
        $data['title'] = "Verify Account";
        $data['notify'] = $this->admin_model->notify_unverified_account();
        $data['unverified_account'] = $this->admin_model->get_unverified_account();
        $this->load->view('header', $data, FALSE);
        $this->load->view('admin/verify-admin', $data, FALSE);
    }

    public function admin_verify_account_details($user, $status)
    {
        if ($this->session->userdata('status') != 'admin') {
            redirect('dashboard');
        }
        $data['title'] = "Verify Account";
        $data['notify'] = $this->admin_model->notify_unverified_account();
        $data['unverified_account'] = $this->admin_model->get_unverified_account();
        $data['unverified_account_details'] = $this->admin_model->get_unverified_account_details($user, $status);
        if ($status == 'technician-unverified') {
            $this->load->view('header', $data, FALSE);
            $this->load->view('admin/details-verify-admin-technician', $data, FALSE);
        } else if ($status == 'customer-unverified') {
            $this->load->view('header', $data, FALSE);
            $this->load->view('admin/details-verify-admin-customer', $data, FALSE);
        }
    }

    public function admin_verify_account_process($user, $status)
    {
        if ($this->session->userdata('status') != 'admin') {
            redirect('dashboard');
        }
        $this->admin_model->verify_account($user, $status);
        redirect('dashboard/admin_verify_account');
    }

    public function admin_delete_account($user)
    {
        if ($this->session->userdata('status') != 'admin') {
            redirect('dashboard');
        }
        $this->admin_model->delete_account($user);
        redirect('dashboard/admin_verify_account');
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
        if ($this->session->userdata('status') != 'unverified') {
            redirect('dashboard');
        }
        $data['title'] = "Menunggu Konfirmasi";
        $this->load->view('header', $data, FALSE);
        $this->load->view('confirmation-user', $data, FALSE);
    }
}

/* End of file Dashboard.php */
