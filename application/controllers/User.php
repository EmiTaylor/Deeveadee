<?php
/*
 * User Controller
 */
class User extends CI_Controller {

    public function __construct() {
       parent::__construct();
       $this->load->model('User_Model');
       $this->load->helper('url_helper');
   }
    /**
    * Check if the user is logged in, if he's not,
    * send him to the login page
    * @return void
    */
	function index()
	{
        $data['title'] = 'Login';
		if($this->session->userdata('is_logged_in')){
			redirect('landing_page');
        }else{
        	$this->load->view('login');
        }
	}
    /**
    * encript the password
    * @return mixed
    */
    function __encrip_password($password) {
        return md5($password);
    }
    /**
    * check the username and the password with the database
    * @return void
    */
	function validate_credentials()
	{
		$this->load->model('User_Model');
		$username = $this->input->post('username');
		$password = $this->__encrip_password($this->input->post('password'));
		$is_valid = $this->User_model->validate($username, $password);

		if($is_valid)
		{
			$data = array(
				'username' => $username,
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('landing_page');
		}
		else // incorrect username or password
		{
			$data['message_error'] = TRUE;
			$this->load->view('login', $data);
		}
	}

	/**
    * Destroy the session, and logout the user.
    * @return void
    */
	function logout()
	{
		$this->session->sess_destroy();
		redirect('landing_page');
	}
}
