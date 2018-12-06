<?php

/**
 * Created by PhpStorm.
 * User: johnyftr
 * Date: 05/12/2018
 * Time: 12:58
 */
class Service extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelClient/Modelservice', 'Modelservice');
        $this->load->model('ModelAdmin/ModelService', 'ModelService');
        $this->load->helper('assets');
    }

    public function index()
    {

            $data['categorie_services'] = $this->Modelservice->toGetCategorieService();
            $this->load->view('admin/categorie_service', $data);
    }
//
    public function  categorie_service_add()
    {
        $data = array(
            'TITRECATEGORIESERVICE' => $this->input->post('titre_categorie_service'),
            'DETAILCATEGORIESERVICE' => $this->input->post('detail_categorie_service'),
            'PHOTOSCATEGORIESERVICE' => $this->input->post('photo_categorie_service'),
            'AUTEUR' => 'fetra',
            'DATEAJOUT' => date('Y-m-d H-i-s')
        );
        $this->ModelService->categorie_add($data);
        var_dump($_POST);
        echo json_encode(array("status" => TRUE));
    }
//
//    public function ajax_edit($id)
//    {
//        $data = $this->Modelservice->get_by_id($id);
//        echo json_encode($data);
//    }
//
//    public function batheme_update()
//    {
//        $data = array(
//            'date_bat' => $this->input->post('date_bat'),
//            'date_close' => $this->input->post('date_close'),
//            'description' => $this->input->post('description'),
//        );
//        $this->Modelservice->batheme_update(array('bat_id' => $this->input->post('bat_id')), $data);
//        echo json_encode(array("status" => TRUE));
//    }
//
//    public function batheme_delete($id)
//    {
//        $this->Modelservice->delete_by_id($id);
//        echo json_encode(array("status" => TRUE));
//    }
}