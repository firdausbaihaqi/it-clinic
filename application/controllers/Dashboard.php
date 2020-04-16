<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('admin_model');
        $this->load->model('customer_model');
        $this->load->model('technician_model');
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

    public function admin_view_list_request_customer()
    {
        if ($this->session->userdata('status') != 'admin') {
            redirect('dashboard');
        }
        $data['title'] = "List Request Customer";
        $data['notify'] = $this->admin_model->notify_unverified_account();
        $data['unverified_account'] = $this->admin_model->get_unverified_account();
        $data['request'] = $this->admin_model->view_list_request_customer();
        $this->load->view('header', $data, FALSE);
        $this->load->view('admin/list-request-customer', $data, FALSE);
    }

    public function admin_view_list_request_technician()
    {
        if ($this->session->userdata('status') != 'admin') {
            redirect('dashboard');
        }
        $data['title'] = "List Request Technician";
        $data['notify'] = $this->admin_model->notify_unverified_account();
        $data['unverified_account'] = $this->admin_model->get_unverified_account();
        $data['request'] = $this->admin_model->view_list_request_technician();
        $this->load->view('header', $data, FALSE);
        $this->load->view('admin/list-request-technician', $data, FALSE);
    }

    public function admin_view_account()
    {
        if ($this->session->userdata('status') != 'admin') {
            redirect('dashboard');
        }
        $data['title'] = "List User";
        $data['notify'] = $this->admin_model->notify_unverified_account();
        $data['unverified_account'] = $this->admin_model->get_unverified_account();
        $data['verified_account'] = $this->admin_model->get_verified_account();
        $this->load->view('header', $data, FALSE);
        $this->load->view('admin/list-user', $data, FALSE);
    }

    public function admin_verify_account()
    {
        if ($this->session->userdata('status') != 'admin') {
            redirect('dashboard');
        }
        $data['title'] = "Verify User";
        $data['notify'] = $this->admin_model->notify_unverified_account();
        $data['unverified_account'] = $this->admin_model->get_unverified_account();
        $this->load->view('header', $data, FALSE);
        $this->load->view('admin/verify-admin', $data, FALSE);
    }

    public function admin_verify_account_process($user, $status)
    {
        if ($this->session->userdata('status') != 'admin') {
            redirect('dashboard');
        }
        $this->admin_model->verify_account($user, $status);
        redirect('dashboard/admin_verify_account');
    }

    public function admin_delete_account($user, $image)
    {
        if ($this->session->userdata('status') != 'admin') {
            redirect('dashboard');
        }
        $this->admin_model->delete_account($user, $image);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function admin_approve_request($id, $user)
    {
        if ($this->session->userdata('status') != 'admin') {
            redirect('dashboard');
        }
        $this->admin_model->approve_list_request_customer($id, $user);
        redirect('dashboard/admin_view_list_request_customer');
    }

    public function admin_update_request($id)
    {
        if ($this->session->userdata('status') != 'admin') {
            redirect('dashboard');
        }
        $this->admin_model->update_list_request_technician($id);
        redirect('dashboard/admin_view_list_request_technician');
    }

    public function admin_cancel_request($id, $user, $image)
    {
        if ($this->session->userdata('status') != 'admin') {
            redirect('dashboard');
        }
        $this->admin_model->cancel_list_request_customer($id, $user, $image);
        redirect('dashboard/admin_view_list_request_customer');
    }

    public function admin_view_history()
    {
        if ($this->session->userdata('status') != 'admin') {
            redirect('dashboard');
        }
        $data['title'] = "Request History";
        $data['notify'] = $this->admin_model->notify_unverified_account();
        $data['unverified_account'] = $this->admin_model->get_unverified_account();
        $data['request'] = $this->admin_model->view_history();
        $this->load->view('header', $data, FALSE);
        $this->load->view('admin/request-history-admin', $data, FALSE);
    }


    public function technician()
    {
        if ($this->session->userdata('status') != 'technician') {
            redirect('dashboard');
        }
        $data['title'] = "Dashboard Teknisi";
        $data['request'] = $this->technician_model->view_request();
        $this->load->view('header', $data, FALSE);
        $this->load->view('technician/dashboard-technician', $data, FALSE);
    }

    public function technician_take_request($id)
    {
        if ($this->session->userdata('status') != 'technician') {
            redirect('dashboard');
        }
        if ($this->technician_model->limit_take_request() == true) {
            $this->technician_model->take_request($id);
            redirect('dashboard/technician');
        } else {
            redirect('dashboard/technician');
        }
    }

    public function technician_view_accepted_request()
    {
        if ($this->session->userdata('status') != 'technician') {
            redirect('dashboard');
        }
        $data['title'] = "Accepted Request";
        $data['request'] = $this->technician_model->view_accept_request();
        $this->load->view('header', $data, FALSE);
        $this->load->view('technician/list-accepted-request', $data, FALSE);
    }

    public function technician_view_history()
    {
        if ($this->session->userdata('status') != 'technician') {
            redirect('dashboard');
        }
        $user = $this->session->userdata('user');
        $data['title'] = "View History";
        $data['request'] = $this->technician_model->view_history($user);
        $this->load->view('header', $data, FALSE);
        $this->load->view('technician/request-history-technician', $data, FALSE);
    }

    public function customer()
    {
        if ($this->session->userdata('status') != 'customer') {
            redirect('dashboard');
        }
        $data['title'] = "Dashboard Customer";
        $data['request'] = $this->customer_model->view_request();
        //search
        $keyword = $this->input->post('keyword');
        if ($keyword != ""){
            $data['request'] = $this->customer_model->search($keyword);
        }
        $this->load->view('header', $data, FALSE);
        $this->load->view('customer/dashboard-customer', $data, FALSE);
    }

    public function customer_add_request_process()
    {
        if ($this->session->userdata('status') != 'customer') {
            redirect('dashboard');
        }
        $this->customer_model->add_request();
        redirect(site_url('dashboard/customer'));
    }

    public function customer_cancel_request($id, $user, $image)
    {
        if ($this->session->userdata('status') != 'customer') {
            redirect('dashboard');
        }
        $this->customer_model->cancel_request($id, $user, $image);
        redirect(site_url('dashboard/customer'));
    }

    public function customer_view_history()
    {
        if ($this->session->userdata('status') != 'customer') {
            redirect('dashboard');
        }
        $user = $this->session->userdata('user');
        $data['title'] = "View History";
        $data['request'] = $this->customer_model->view_history($user);
        $this->load->view('header', $data, FALSE);
        $this->load->view('customer/request-history-customer', $data, FALSE);
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
