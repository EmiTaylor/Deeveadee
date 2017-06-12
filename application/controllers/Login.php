<?php


class Login extends CI_Controller {

	public function index()
	{
		$this->load->library('session');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_login');
	        if ($this->form_validation->run()==FALSE) {
	            $this->load->view('login');
	        } else {
	            redirect(base_url('index.php/home'), 'refresh');
	        }

        $this->load->view('templates/header');
        $this->load->view('templates/footer');
	}
    public function log($password) {
        $username = $this->input->post('username');
        $result = $this->login->login($username, $password);
            if($result) {
                $sess_array = array();
                foreach($user as $user_list) {
                    $sess_array = $arrayName = array('id' => $row->id,'username' => $row->username,'password' => $row->password);
                    $this->session->set_userdata('logged_in', $sess_array);
                }
                return TRUE;
            } else {
                $this->form_validation->set_message('log', 'Invalid username or password, please try again');
                return FALSE;
            }

    }
}