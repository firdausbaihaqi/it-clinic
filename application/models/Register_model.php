<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

    public function post_technician()
    {
        $data1 = array(
            'user' => $this->input->post('user'),
            'password' => $this->input->post('password'),
            'status' => 'technician-unverified'
        );
        $data2 = array(
            'user' => $this->input->post('user'),
            'password' => $this->input->post('password'),
            'fullname' => $this->input->post('fullname'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
            'education' => $this->input->post('education')
        );
        $this->db->insert('user', $data1);
        $this->db->insert('user_technician', $data2);
        if($this->db->error()!=null){
            $this->session->set_flashdata('message', 'Username telah dipakai, gunakan username lain');
        }
    }

    public function post_customer()
    {
        $data1 = array(
            'user' => $this->input->post('user'),
            'password' => $this->input->post('password'),
            'status' => 'customer-unverified'
        );
        $data2 = array(
            'user' => $this->input->post('user'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone')
        );
        $this->db->insert('user', $data1);
        $this->db->insert('user_customer', $data2);
        if($this->db->error()!=null){
            $this->session->set_flashdata('message', 'Username telah dipakai, gunakan username lain');
        }
    }

}

/* End of file Register_model.php */
