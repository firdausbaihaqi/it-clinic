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
        $data['notify_account_number'] = $this->admin_model->notify_unverified_account();
        $data['notify_shipment_number'] = $this->admin_model->notify_shipment_number();
        $data['notify_shipment_list'] = $this->admin_model->notify_shipment_list();
        $data['unverified_account'] = $this->admin_model->get_unverified_account();
        $data['chart'] = $this->admin_model->chart();
        $this->load->view('header', $data, FALSE);
        $this->load->view('admin/dashboard-admin', $data, FALSE);
    }

    public function admin_view_list_request_customer()
    {
        if ($this->session->userdata('status') != 'admin') {
            redirect('dashboard');
        }
        $data['title'] = "List Request Customer";
        $data['notify_account_number'] = $this->admin_model->notify_unverified_account();
        $data['notify_shipment_number'] = $this->admin_model->notify_shipment_number();
        $data['notify_shipment_list'] = $this->admin_model->notify_shipment_list();
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
        $data['notify_account_number'] = $this->admin_model->notify_unverified_account();
        $data['notify_shipment_number'] = $this->admin_model->notify_shipment_number();
        $data['notify_shipment_list'] = $this->admin_model->notify_shipment_list();
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
        $data['notify_account_number'] = $this->admin_model->notify_unverified_account();
        $data['notify_shipment_number'] = $this->admin_model->notify_shipment_number();
        $data['notify_shipment_list'] = $this->admin_model->notify_shipment_list();
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
        $data['notify_account_number'] = $this->admin_model->notify_unverified_account();
        $data['notify_shipment_number'] = $this->admin_model->notify_shipment_number();
        $data['notify_shipment_list'] = $this->admin_model->notify_shipment_list();
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
        $data['notify_account_number'] = $this->admin_model->notify_unverified_account();
        $data['notify_shipment_number'] = $this->admin_model->notify_shipment_number();
        $data['notify_shipment_list'] = $this->admin_model->notify_shipment_list();
        $data['unverified_account'] = $this->admin_model->get_unverified_account();
        $data['request'] = $this->admin_model->view_history();
        //search
        $keyword = $this->input->post('keyword');
        if ($keyword != "") {
            $data['request'] = $this->admin_model->search($keyword);
        }
        $this->load->view('header', $data, FALSE);
        $this->load->view('admin/request-history-admin', $data, FALSE);
    }

    public function admin_save_history($id)
    {
        if ($this->session->userdata('status') != 'admin') {
            redirect('dashboard');
        }
        $this->admin_model->save_to_history($id);
        redirect(site_url('dashboard/admin_view_history'));
    }

    public function admin_view_shipment()
    {
        if ($this->session->userdata('status') != 'admin') {
            redirect('dashboard');
        }
        $data['title'] = "Request Pengiriman";
        $data['notify_account_number'] = $this->admin_model->notify_unverified_account();
        $data['notify_shipment_number'] = $this->admin_model->notify_shipment_number();
        $data['notify_shipment_list'] = $this->admin_model->notify_shipment_list();
        $data['unverified_account'] = $this->admin_model->get_unverified_account();
        $data['request'] = $this->admin_model->view_shipment();
        //search
        $keyword = $this->input->post('keyword');
        if ($keyword != "") {
            $data['request'] = $this->admin_model->search($keyword);
        }
        $this->load->view('header', $data, FALSE);
        $this->load->view('admin/shipment', $data, FALSE);
    }

    public function admin_process_shipment($id, $shipment)
    {
        if ($this->session->userdata('status') != 'admin') {
            redirect('dashboard');
        }
        $this->admin_model->process_shipment($id, $shipment);
        redirect(site_url('dashboard/admin_view_shipment'));
    }

    public function admin_print_invoice($id, $customer)
    {
        if ($this->session->userdata('status') != 'admin') {
            redirect('dashboard');
        }
        $data['title'] = "Invoice";
        $data['notify_account_number'] = $this->admin_model->notify_unverified_account();
        $data['notify_shipment_number'] = $this->admin_model->notify_shipment_number();
        $data['notify_shipment_list'] = $this->admin_model->notify_shipment_list();
        $data['unverified_account'] = $this->admin_model->get_unverified_account();
        $data['customer'] = $this->admin_model->get_verified_account_details($customer, 'customer');
        $data['request'] = $this->admin_model->invoice($id);
        $this->load->view('header', $data, FALSE);
        $this->load->view('admin/invoice', $data, FALSE);
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

    public function technician_view_profile()
    {
        if ($this->session->userdata('status') != 'technician') {
            redirect('dashboard');
        }
        $data['title'] = "Profile Teknisi";
        $data['profile'] = $this->technician_model->view_profile();
        $this->load->view('header', $data, FALSE);
        $this->load->view('technician/profile-technician', $data, FALSE);
    }

    public function technician_edit_profile($user)
    {
        if ($this->session->userdata('status') != 'technician') {
            redirect('dashboard');
        }
        $this->technician_model->edit_profile($user);
        redirect(site_url('dashboard/technician_view_profile'));
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
        //search
        $keyword = $this->input->post('keyword');
        if ($keyword != "") {
            $data['request'] = $this->technician_model->search($keyword);
        }
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
        if ($keyword != "") {
            $data['request'] = $this->customer_model->search($keyword);
        }
        $this->load->view('header', $data, FALSE);
        $this->load->view('customer/dashboard-customer', $data, FALSE);
    }

    public function customer_view_profile()
    {
        if ($this->session->userdata('status') != 'customer') {
            redirect('dashboard');
        }
        $data['title'] = "Profile Customer";
        $data['profile'] = $this->customer_model->view_profile();
        $this->load->view('header', $data, FALSE);
        $this->load->view('customer/profile-customer', $data, FALSE);
    }

    public function customer_edit_profile($user)
    {
        if ($this->session->userdata('status') != 'customer') {
            redirect('dashboard');
        }
        $this->customer_model->edit_profile($user);
        redirect(site_url('dashboard/customer_view_profile'));
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
        //search
        $keyword = $this->input->post('keyword');
        if ($keyword != "") {
            $data['request'] = $this->customer_model->search($keyword);
        }
        $this->load->view('header', $data, FALSE);
        $this->load->view('customer/request-history-customer', $data, FALSE);
    }

    public function customer_save_history($id)
    {
        if ($this->session->userdata('status') != 'customer') {
            redirect('dashboard');
        }
        $this->customer_model->save_to_history($id);
        redirect(site_url('dashboard/customer_view_history'));
    }

    public function customer_request_shipment($id)
    {
        if ($this->session->userdata('status') != 'customer') {
            redirect('dashboard');
        }
        $this->customer_model->request_shipment($id);
        redirect(site_url('dashboard/customer'));
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
