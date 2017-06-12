<?php
class Login_Model extends CI_Model {

	private $table = 'Users';

	public function log() {

		$username->$this->input->POST('username');
		$password->$this->input->POST('password');

		$this->db->where('username', $username);
		$query = $this->db->get($this->table);

		if ($query->num_rows()) {
			// found row by username
			$row = $query->row_array();

			//check password
			if ($row['password'] == sha1($password)) {
				return ERR_NONE;
			}
			//password not match
			return ERR_INVALID_PASSWORD;
		} else {
			// if not found
			return ERR_INVALID_USERNAME;
		}
	}
}
