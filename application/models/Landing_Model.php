<?php
/*
 * Landing Model
 */
class Landing_Model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_societe() {

        $query = $this->db->query('SELECT nomS, numRueS, rueS,
                                    villeS, directeurS, cover, presentation FROM societe');
        return $query->result_array();
    }
    /**
     *	Récupère des données dans la base de données.
     */
	public function read_societe() {
        $data['nomS'] = $data['societe_item']['nomS'];

        $this->load->view('templates/header');
        $this->load->view('societe/view');
        $this->load->view('templates/footer');
	}

    /**
     *	Supprime une ou plusieurs lignes de la base de données.
     */
	public function delete_societe($id) {
        $this->Landing_Model->delete($id);
        redirect('landing_page', 'refresh');
	}
    public function get_dvd() {

        $query = $this->db->query('SELECT numD, titreD, auteurD,
                                    anneeD, categorieD, dateAchatD, nombreD, societeD, resume, cover FROM Dvd');
        return $query->result_array();
    }
    /**
     *	Récupère des données dans la base de données.
     */
	public function read_dvd() {
        $data['titreD'] = $data['dvd_item']['titreD'];

        $this->load->view('templates/header');
        $this->load->view('societe/view');
        $this->load->view('templates/footer');
	}

}
