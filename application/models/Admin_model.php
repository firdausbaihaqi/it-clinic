<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function get_verified_account()
    {
        $this->db->where('user !=', 'default');
        $this->db->where('status', 'technician');
        $this->db->or_where('status', 'customer');
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
        $this->db->where('status', 'technician-unverified');
        $this->db->or_where('status', 'customer-unverified');
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
            $this->db->where('user', $user);
            $this->db->set('status', 'technician');
            $this->db->update('user');
        } else if ($status == 'customer-unverified') {
            $this->db->where('user', $user);
            $this->db->set('status', 'customer');
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
        $this->db->where('status', 'technician-unverified');
        $this->db->or_where('status', 'customer-unverified');
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

    public function view_list_request_customer()
    {
        $this->db->where('status', 'in_queue');
        $this->db->or_where('status', 'available');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('order');
        $result = $query->result();
        return $result;
    }

    public function approve_list_request_customer($id, $user)
    {
        $this->db->where('id', $id);
        $this->db->where('customer', $user);
        $this->db->set('status', 'available');
        $this->db->update('order');
        $this->session->set_flashdata('message', 'Order berhasil diapprove');
    }

    public function cancel_list_request_customer($id, $user, $image)
    {
        $this->db->where('id', $id);
        $this->db->where('customer', $user);
        $this->db->delete('order');
        $this->session->set_flashdata('message', 'Order berhasil ditolak');
        $path = 'C:\xampp\htdocs\it-clinic\data\order\\';
        unlink($path . $image);
    }

    public function view_list_request_technician()
    {
        $this->db->where('status', 'in_progress');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('order');
        $result = $query->result();
        return $result;
    }

    public function update_list_request_technician($id)
    {
        $data = array(
            'date_finish' => $this->input->post('date_finish'),
            'price' => $this->input->post('price'),
            'detail' => $this->input->post('detail'),
            'status' => $this->input->post('status')
        );
        $this->db->where('id', $id);
        $this->db->update('order', $data);
        $this->session->set_flashdata('message', 'Order berhasil diupdate');
    }

    public function view_history()
    {
        $this->db->where('shipment', 'history');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('order');
        $result = $query->result();
        return $result;
    }

    public function save_to_history($id)
    {
        $this->db->where('id', $id);
        $this->db->set('shipment', 'history');
        $this->db->update('order');
        $this->session->set_flashdata('message', 'Request disimpan dalam history');
    }

    public function view_shipment()
    {
        $this->db->where('shipment', 'in_request');
        $this->db->or_where('shipment', 'in_delivery');
        $this->db->or_where('shipment', 'delivered');
        $query = $this->db->get('order');
        $result = $query->result();
        return $result;
    }

    public function process_shipment($id, $shipment)
    {
        $this->db->where('id', $id);
        if ($shipment == "in_request") {
            $this->db->set('shipment', 'in_delivery');
            $this->session->set_flashdata('message', 'Perangkat akan segera dikirim');
        } else if ($shipment == "in_delivery") {
            $this->db->set('shipment', 'delivered');
            $this->session->set_flashdata('message', 'Perangkat telah sampai ke customer');
        }
        $this->db->update('order');
    }
    
    public function notify_shipment_list()
    {
        $this->db->where('shipment', 'in_request');
        $query = $this->db->get('order');
        $result = $query->result();
        return $result;
    }

    public function notify_shipment_number()
    {
        $this->db->where('shipment', 'in_request');
        $query = $this->db->get('order');
        $result = $query->num_rows();
        return $result;
    }

    public function chart()
    {
        $sql = "select year(date_order) as year, month(date_order) as month, count(id) as total from `order` where status = 'finish' or status = 'history' group by month(date_order)";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
}

/* End of file Admin_model.php */
