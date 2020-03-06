<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{

    public function process($user, $password)
    {
        $this->db->where('user', $user);
        $this->db->where('password', $password);
        $query = $this->db->get('user');
        $result = $query->result();
        if ($this->db->affected_rows() == 1) {
            foreach ($result as $row) {
                if ($row->status == 'admin') {
                    $this->session->set_userdata('status', 'admin');
                    echo 'admin';
                    redirect(site_url('home'));
                } elseif ($row->status == 'technician') {
                    $this->session->set_userdata('status', 'technician');
                    redirect(site_url('dashboard/technician'));
                } elseif ($row->status == 'customer') {
                    $this->session->set_userdata('status', 'customer');
                    redirect(site_url('dashboard/customer'));
                } elseif ($row->status == 'technician-unverified') {
                    echo 'technician-unverified';
                } elseif ($row->status == 'customer-unverified') {
                    echo 'customer-unverified';
                }
            }
        } else {
            $this->session->set_flashdata('message', 'Login failed ! Check your username and password');
            redirect(site_url('login'));
        }
    }
}

/* End of file Login_model.php */
