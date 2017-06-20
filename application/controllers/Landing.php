<?php
/*
 * Landing Controller
 */
class Landing extends CI_Controller {

    public function __construct() {
       parent::__construct();
       $this->load->model('Landing_Model');
       $this->load->helper('url_helper');
   }

    public function index(){
        $data['title'] = 'Welcome home';
        $data['last_dvd'] = $this->Dvd_Model->getdvd();
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('landing_page', $data);
        $this->load->view('templates/footer');
    }
}

    // public function view($id = NULL){
    //  $data['societe_item'] = $this->Landing_Model->get_societe($id);
    //
    //  if (empty($data['societe_item']))
    //  {
    //      show_404();
    //  }
    //  $data['nom'] = $data['societe_item']['nomS'];
    //
    //  $this->load->view('templates/header', $data);
    //  $this->load->view('societe/view');
    //  $this->load->view('templates/footer');
    // }
    // public function (){
    //     $data['title'] = 'Welcome home';
    //     $data['societe'] = $this->Landing_Model->get_societe();
    //     $data['dvd'] = $this->Landing_Model->get_dvd();
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/nav');
    //     $this->load->view('landing_page');
    //     $this->load->view('templates/footer');
    // }
