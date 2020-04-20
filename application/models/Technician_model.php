<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Technician_model extends CI_Model
{

    public function view_profile()
    {
        $user = $this->session->userdata('user');

        $this->db->where('user', $user);
        $query = $this->db->get('user_technician');
        $result = $query->result();
        return $result;
    }

    public function edit_profile($user)
    {
        $user_new = $this->input->post('user');
        

        $this->db->where('user', $user);
        $this->db->set('user', $user_new);
        $this->db->update('user');

        $data = array(
            'password' => $this->input->post('password'),
            'fullname' => $this->input->post('fullname'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
            'education' => $this->input->post('education')
        );
        $this->db->where('user', $user);
        $this->db->update('user_technician', $data);

        $this->session->set_userdata('user', $user_new);
        $this->session->set_flashdata('message', 'Update profile berhasil');
    }

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
        $this->db->where('status', 'in_progress');
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
        $this->db->where('status', 'in_progress');
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

    public function search($keyword)
    {
        $user = $this->session->userdata('user');

        $this->db->like('code_order', $keyword);
        $this->db->or_Like('detail', $keyword);
        $this->db->or_Like('date_finish', $keyword);
        $this->db->where('technician', $user);
        $query = $this->db->get('order');
        $result = $query->result();
        $this->session->set_flashdata('message', 'Hasil Pencarian');
        return $result;
    }
    
}

/* End of file Technician_model.php */
