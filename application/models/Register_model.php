<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register_model extends CI_Model
{

    public function post_technician()
    {
        $user = $this->input->post('user');

        $config['upload_path']   = './data/profile';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']      = 0;
        $config['file_name'] = $user;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $error = $this->upload->display_errors();
            echo $error;
        }

        $upload_data = $this->upload->data();
        $file_name = $upload_data['file_name'];

        $data1 = array(
            'user' => $this->input->post('user'),
            'password' => $this->input->post('password'),
            'status' => 'technician-unverified'
        );
        $data2 = array(
            'user' => $this->input->post('user'),
            'password' => $this->input->post('password'),
            'fullname' => $this->input->post('fullname'),
            'image' => $file_name,
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
            'education' => $this->input->post('education')
        );
        $this->db->insert('user', $data1);
        $this->db->insert('user_technician', $data2);

        $error = $this->db->error();
        if ($error['message'] != null) {
            $this->session->set_flashdata('message', 'Username telah dipakai, gunakan username lain');
            unlink($upload_data['full_path']);
        }else{
            $this->session->set_flashdata('message', 'Registrasi berhasil, harap tunggu validasi admin');
        }
    }

    public function post_customer()
    {
        $user = $this->input->post('user');

        $config['upload_path']   = './data/profile';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']      = 0;
        $config['file_name'] = $user;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $error = $this->upload->display_errors();
            echo $error;
        }

        $upload_data = $this->upload->data();
        $file_name = $upload_data['file_name'];

        $data1 = array(
            'user' => $this->input->post('user'),
            'password' => $this->input->post('password'),
            'status' => 'customer-unverified'
        );
        $data2 = array(
            'user' => $this->input->post('user'),
            'password' => $this->input->post('password'),
            'fullname' => $this->input->post('fullname'),
            'image' => $file_name,
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone')
        );
        $this->db->insert('user', $data1);
        $this->db->insert('user_customer', $data2);

        $error = $this->db->error();
        if ($error['message'] != null) {
            $this->session->set_flashdata('message', 'Username telah dipakai, gunakan username lain');
            unlink($upload_data['full_path']);
        }else{
            $this->session->set_flashdata('message', 'Registrasi berhasil, harap tunggu validasi admin');
        }
    }
}

/* End of file Register_model.php */
