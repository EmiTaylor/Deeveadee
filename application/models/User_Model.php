<?php
/*
 * User Model
 */
class User_Model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function get_user() {
        $query = $this->db->query('SELECT username, password, email, gender, created_date, phone, bio, picture FROM Users');
        return $query->result_array();
    }
    public function set_user($id = 0) {
       $this->load->helper('url');

       $data = array(
           'username' => $this->input->post('username'),
           'password' => $this->input->post('password'),
           'email' => $this->input->post('email'),
           'gender' => $this->input->post('gender'),
           'created_date' => $this->input->post('created_date'),
           'phone' => $this->input->post('phone'),
           'bio' => $this->input->post('bio'),
           'picture' => $this->input->post('picture'),
       );
       if ($id === 0) {
           return $this->db->insert('user', $data);
       } else {
           $this->db->where('id', $id);
           return $this->db->update('user', $data);
       }
   }
}
