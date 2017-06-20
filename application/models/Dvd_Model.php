<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Dvd_Model
 */

class Dvd_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function getDvdById($id) {
        $this->db->where('id =', $id);

        $query = $this->db->get('Dvd', 1);

        return $query->result()[0];
    }
    public function getdvd($id) {

    }
}
