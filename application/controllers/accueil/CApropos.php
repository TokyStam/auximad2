<?php

/**
 * Created by PhpStorm.
 * User: johnyftr
 * Date: 26/11/2018
 * Time: 11:47
 */
class CApropos extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('assets_helper');
        $this->load->model('ModelClient/Modelapropos', 'Modelapropos');
        $this->load->model('ModelClient/Modelservice', 'Modelservice');
    }

    public function categorieApropos($t="", $n="")
    {
        $apropos = $this->Modelapropos->toGetListeCategorieApropos();
        $services = $this->Modelservice->toGetCategorieService();
        $detailleCategorie = $this->Modelapropos->toGetDetailCategorieApropos($n);

        $data = array(
            'apropos' => $apropos,
            'services' => $services,
            'detailleCategorie' => $detailleCategorie,
        );

        $this->load->view('accueil/apropos', $data);
    }


}