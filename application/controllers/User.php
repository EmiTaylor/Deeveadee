<?php



/*
 * User Controller
 */
class User extends CI_Controller {

    public function __construct() {
        $this->load->database();
        parent::__construct();
        $this->load->model('User_Model');
        $this->load->helper(['form', 'url']);
        $this->load->library(['session', 'form_validation']);
   }
   public function login() {
   $config = array(
       array(
           'field' => 'password',
           'label' => 'password',
           'rules' => 'required',
           'errors' => array(
            'required' => 'Saisissez un mot de passe, please',
           ),
       ),
       array(
           'field' => 'email',
           'label' => 'email',
           'rules' => 'required',
           'errors' => array(
             'required' => 'Saisissez une adresse email, please',
           ),
       )
   );
       $this->form_validation->set_rules($config);

       if ($this->form_validation->run()) {
           $user = $this->UserModel->getByEmail($this->input->post('email'));
           if (!empty($user) and password_verify($this->input->post('password'), $user->passwordU)) {
               $userdata = array(
                   'email'     => $user->email,
                   'role'      => $user->role,
                   'logged_in' => true
               );
               $this->session->set_userdata($userdata);
               redirect('/');
           }
       }
       $this->load->view('login');
   }
    public function logout() {
       $this->session->sess_destroy();
       redirect('/');
    }
    public function register() {
        $config = array(
           array(
               'field' => 'password',
               'label' => 'password',
               'rules' => 'required',
               'errors' => array(
                   'required' => 'Mot de passe please',
               ),
           ),
           array(
               'field' => 'email',
               'label' => 'email',
               'rules' => 'required|callback_userNotExists',
               'errors' => array(
                   'required' => 'Adresse email please',
                   'userNotExists' => 'Cette adresse email est déjà liée a un compte',
               ),
           )
       );
       $this->form_validation->set_rules($config);
       if ($this->form_validation->run())
       {
           $this->load->database();
           $data = array(   'email' => $this->input->post('email'),
                            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                            'date' => time()
           );
           $this->db->insert('utilisateur', $data);
           redirect('/user/login/');
       }
       $this->load->view('register');
    }
    public function userNotExists($email) {
       $user = $this->User_Model->getByEmail($email);
       return empty($user);
    }
}
