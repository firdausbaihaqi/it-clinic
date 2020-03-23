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

    public function get_verified_account_details($user, $status)
    {
        if ($status == 'technician') {
            $this->db->where('user', $user);
            $query = $this->db->get('user_technician');
            $result = $query->result();
            return $result;
        } else if ($status == 'customer') {
            $this->db->where('user', $user);
            $query = $this->db->get('user_customer');
            $result = $query->result();
            return $result;
        }
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

    public function delete_account($user, $image)
    {   
        $this->db->where('customer', $user);
        $this->db->or_where('technician', $user);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('order');
        $result = $query->result();

        foreach ($result as $delete) {
            $this->db->where('id', $delete->id);
            $this->db->where('customer', $delete->customer);
            $this->db->or_where('technician', $delete->technician);
            $this->db->delete('order');
            $path = 'C:\xampp\htdocs\it-clinic\data\order\\';
            $image_order = $delete->image;
            unlink($path . $image_order);
        }

        $this->db->where('user', $user);
        $this->db->delete('user');
        $this->session->set_flashdata('message', 'Akun berhasil dihapus');
        $path = 'C:\xampp\htdocs\it-clinic\data\profile\\';
        unlink($path . $image);
    }

}

/* End of file Admin_model.php */
