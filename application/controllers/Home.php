<?php


class Home extends CI_Controller {

	public function index() {
		if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['email'] = $session_data['email'];
			$data['password'] = $session_data['password'];
			$data['gender'] = $session_data['gender'];
			$data['phone'] = $session_data['phone'];
			$data['bio'] = $session_data['bio'];
			$data['picture'] = $session_data['picture'];
			$this->load->view('home', $data);
		} else{
			redirect('login', 'refresh');
		}
	}
	public function logout() {
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect(site_url('landing'), 'refresh');
	}
}
