<?php


class Login_Model extends CI_Model {

	public function login($username, $password)
	{
        $query = $this->db->query('SELECT id, username, email,
                                    password, gender, created_date, phone, bio, picture FROM Users');
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        // $this->db->limit(1);

        $query = $this->db->log();
        // if ($query->num_rows()==1) {
        //     return $query->result();
        // } else {
        //     return FALSE;
        // }
    }
}
