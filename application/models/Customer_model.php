<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Customer_model extends CI_Model
{
    public function view_request(){
        $user = $this->session->userdata('user');

        $this->db->where('customer', $user);
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

        $data= array(
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
        unlink($path.$image);
    }

    public function view_history($user){
        $this->db->where('status', 'finish');
        $this->db->where('customer', $user);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('order');
        $result = $query->result();
        return $result;
    }
}

/* End of file Customer_model.php */
