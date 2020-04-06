<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Technician_model extends CI_Model
{

    public function view_request()
    {
        $this->db->order_by('id', 'desc');
        $this->db->where('status', 'available');
        $query = $this->db->get('order');
        $result = $query->result();
        return $result;
    }

    public function view_accept_request(){
        $user = $this->session->userdata('user');

        $this->db->where('technician', $user);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('order');
        $result = $query->result();
        return $result;
    }

    public function take_request($id)
    {
        $user = $this->session->userdata('user');

        $this->db->set('technician', $user);
        $this->db->set('status', 'in_progress');
        $this->db->where('id', $id);
        $this->db->update('order');
        $this->session->set_flashdata('message', 'Request order berhasil diambil');
    }

    public function limit_take_request()
    {
        $user = $this->session->userdata('user');

        $this->db->where('technician', $user);
        $query = $this->db->get('order');
        $limit = $query->num_rows();

        if($limit < 3){
            return true;
        }else{
            $this->session->set_flashdata('message', 'Limit request order yang dapat diambil maksimal 3');
            return false;
        }
    }

    public function view_history($user){
        $this->db->where('status', 'finish');
        $this->db->where('technician', $user);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('order');
        $result = $query->result();
        return $result;
    }
}

/* End of file Technician_model.php */
