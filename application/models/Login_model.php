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
        if ($query->num_rows() == 1) {
            foreach ($result as $row) {
                if ($row->status == 'admin') {
                    $this->session->set_userdata('user', $user);
                    $this->session->set_userdata('status', 'admin');
                    echo 'admin';
                    redirect(site_url('dashboard/admin'));
                } elseif ($row->status == 'technician') {
                    $this->session->set_userdata('user', $user);
                    $this->session->set_userdata('status', 'technician');
                    redirect(site_url('dashboard/technician'));
                } elseif ($row->status == 'customer') {
                    $this->session->set_userdata('user', $user);
                    $this->session->set_userdata('status', 'customer');
                    redirect(site_url('dashboard/customer'));
                } elseif ($row->status == 'technician-unverified') {
                    $this->session->set_userdata('user', $user);
                    $this->session->set_userdata('status', 'unverified');
                    redirect(site_url('dashboard/unverified'));
                } elseif ($row->status == 'customer-unverified') {
                    $this->session->set_userdata('user', $user);
                    $this->session->set_userdata('status', 'unverified');
                    redirect(site_url('dashboard/unverified'));
                }
            }
        } else {
            $this->session->set_flashdata('message', 'Login gagal, masukkan username dan password dengan benar');
            redirect(site_url('login'));
        }
    }
}

/* End of file Login_model.php */
