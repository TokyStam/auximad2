<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('assets_helper');
        $this->load->model('ModelClient/Modelapropos', 'Modelapropos');
        $this->load->model('ModelClient/Modelservice', 'Modelservice');
        $this->load->model('ModelAdmin/ModelPhotoSlide');
    }

	public function index()
	{
        $aproposAuximad = $this->Modelapropos->toGetAproposAuximad();
        $apropos = $this->Modelapropos->toGetListeCategorieApropos();
        $services = $this->Modelservice->toGetCategorieService();

        $data = array(
            'aproposAuximad' => $aproposAuximad,
            'apropos' => $apropos,
            'services' => $services,
        );
        $data['photosslide'] = $this->ModelPhotoSlide->toGetPhotoSlide();
		$this->load->view('accueil/index', $data);
	}
}
