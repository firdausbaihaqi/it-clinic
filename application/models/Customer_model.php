<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Customer_model extends CI_Model
{
    public function view_profile()
    {
        $user = $this->session->userdata('user');

        $this->db->where('user', $user);
        $query = $this->db->get('user_customer');
        $result = $query->result();
        return $result;
    }

    public function edit_profile($user)
    {
        $user_new = $this->input->post('user');
        $password_new = $this->input->post('password');

        $this->db->where('user', $user);
        $this->db->set('user', $user_new);
        $this->db->set('password', $password_new);
        $this->db->update('user');

        $data = array(
            'password' => $this->input->post('password'),
            'fullname' => $this->input->post('fullname'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone')
        );
        $this->db->where('user', $user);
        $this->db->update('user_customer', $data);

        $this->session->set_userdata('user', $user_new);
        $this->session->set_flashdata('message', 'Update profile berhasil');
    }

    public function edit_picture($image)
    {
        $path = 'C:\xampp\htdocs\it-clinic\data\profile\\';
        unlink($path . $image);

        $user = $this->session->userdata('user');

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

        $this->db->where('user', $user);
        $this->db->set('image', $file_name);
        $this->db->update('user');

        $this->db->where('user', $user);
        $this->db->set('image', $file_name);
        $this->db->update('user_customer');

        $this->session->set_flashdata('message', 'Update profile berhasil');
    }

    public function view_request()
    {
        $user = $this->session->userdata('user');

        $this->db->where('customer', $user);
        $this->db->where_not_in('status', 'history');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('order');
        $result = $query->result();
        return $result;
    }

    public function add_request()
    {
        $user = $this->session->userdata('user');

        $config['upload_path']   = './data/order';
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

        $data = array(
            'code_order' => mt_rand(),
            'customer' => $user,
            'technician' => 'default',
            'image' => $file_name,
            'date_order' => $this->input->post('date_order'),
            'detail' => $this->input->post('detail'),
            'status' => 'in_queue'
        );
        $this->db->insert('order', $data);
        $this->session->set_flashdata('message', 'Order berhasil direquest');
    }

    public function cancel_request($id, $user, $image)
    {
        $this->db->where('id', $id);
        $this->db->where('customer', $user);
        $this->db->delete('order');
        $this->session->set_flashdata('message', 'Order berhasil dibatalkan');
        $path = 'C:\xampp\htdocs\it-clinic\data\order\\';
        unlink($path . $image);
    }

    public function view_history($user)
    {
        $this->db->where('status', 'history');
        $this->db->where('customer', $user);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('order');
        $result = $query->result();
        return $result;
    }

    public function save_to_history($id)
    {
        $user = $this->session->userdata('user');

        $this->db->where('id', $id);
        $this->db->where('customer', $user);
        $this->db->set('status', 'history');
        $this->db->update('order');
        $this->session->set_flashdata('message', 'Request disimpan dalam history');
    }

    public function request_shipment($id)
    {
        $user = $this->session->userdata('user');

        $this->db->where('id', $id);
        $this->db->where('customer', $user);
        $this->db->set('shipment', 'in_request');
        $this->db->update('order');
        $this->session->set_flashdata('message', 'Request pengiriman berhasil');
    }

    public function notify_in_queue_order()
    {
        $this->db->where('status', 'in_queue');
        $this->db->where('status', 'available');
        $query = $this->db->get('order');
        $result = $query->num_rows();
        return $result;
    }

    public function notify_in_progress_order()
    {
        $this->db->where('status', 'in_progress');
        $query = $this->db->get('order');
        $result = $query->num_rows();
        return $result;
    }

    public function notify_finish_order()
    {
        $this->db->where('status', 'finish');
        $query = $this->db->get('order');
        $result = $query->num_rows();
        return $result;
    }


}

/* End of file Customer_model.php */
