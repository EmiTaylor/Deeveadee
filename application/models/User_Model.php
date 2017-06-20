<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * User_Model
 */

class User_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function getUserByEmail($email) {
        $this->db->where('email =', $email);

        $query = $this->db->get('User', 1);

        return $query->result()[0];
    }
}
