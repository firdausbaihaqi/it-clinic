<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function get_verified_account()
    {
        $where = "status='technician' OR status='customer'";
        $this->db->where($where);
        $query = $this->db->get('user');
        $result = $query->result();
        return $result;
    }

    public function get_unverified_account()
    {
        $where = "status='technician-unverified' OR status='customer-unverified'";
        $this->db->where($where);
        $query = $this->db->get('user');
        $result = $query->result();
        return $result;
    }

    public function get_unverified_account_details($user, $status)
    {
        if ($status == 'technician-unverified') {
            $this->db->where('user', $user);
            $query = $this->db->get('user_technician');
            $result = $query->result();
            return $result;
        } else if ($status == 'customer-unverified') {
            $this->db->where('user', $user);
            $query = $this->db->get('user_customer');
            $result = $query->result();
            return $result;
        }
    }

    public function verify_account($user, $status)
    {
        if ($status == 'technician-unverified') {
            $this->db->set('status', 'technician');
            $this->db->where('user', $user);
            $this->db->update('user');
        } else if ($status == 'customer-unverified') {
            $this->db->set('status', 'customer');
            $this->db->where('user', $user);
            $this->db->update('user');
        }
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', 'Verifikasi akun berhasil');
        } else {
            $this->session->set_flashdata('message', 'Verifikasi akun gagal');
        }
    }

    public function notify_unverified_account()
    {
        $where = "status='technician-unverified' OR status='customer-unverified'";
        $this->db->where($where);
        $query = $this->db->get('user');
        $result = $query->num_rows();
        return $result;
    }

    public function delete_account($user)
    {
        $this->db->where('user', $user);
        $this->db->delete('user');
        $this->session->set_flashdata('message', 'Akun berhasil dihapus');
    }
}

/* End of file Admin_model.php */