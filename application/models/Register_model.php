<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

    public function post_customer($data1, $data2)
    {
        $this->db->insert('user', $data1);
        $this->db->insert('user_customer', $data2);
    }

}

/* End of file Register_model.php */
