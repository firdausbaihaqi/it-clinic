<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Customer_model extends CI_Model
{
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
            'customer' => $user,
            'technician' => 'default',
            'image' => $file_name,
            'date_order' => $this->input->post('date_order'),
            'detail' => $this->input->post('detail'),
            'status' => 'in_queue'
        );
        $this->db->insert('order', $data);
    }
}

/* End of file Customer_model.php */
