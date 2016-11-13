<?php

class Employees_model extends CI_Model{
    
    function is_valid($email, $password) {
        $this->db->select('id, email, password, email');
        $this->db->from('hemah_employees');
        $this->db->where('email', $email);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

}
