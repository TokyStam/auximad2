<?php

/**
 * Created by PhpStorm.
 * User: johnyftr
 * Date: 05/12/2018
 * Time: 12:58
 */
class CService extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelClient/Modelservice', 'Modelservice');
        $this->load->model('ModelAdmin/ModelServiceAdmin', 'ModelServiceAdmin');
        $this->load->helper('assets');

        //redirection s'il n'y a aucun admin connectE
        if( !isset($_SESSION['username']) && empty($_SESSION['username']) && $_SESSION['is_admin'] == FALSE){
            redirect('admin/User/login');
        }
    }

    public function index()
    {
            $data['categorie_services'] = $this->Modelservice->toGetCategorieService();
            $this->load->view('admin/categorie_service', $data);
    }
    //------------------------------------categorie service------------------------------------------//
//
    public function ajax_edit($id)
    {
        $data = $this->Modelservice->getByCategorieId($id);
        echo json_encode($data);
    }
//
    public function categorie_service_update()
    {
        /*Photos categories services*/
        $categorie = $this->Modelservice->getByCategorieId( $this->input->post('categorie_id'));
        $photosCategorieservice = $categorie->PHOTOSCATEGORIESERVICE;

        //suprimer l'ancien photo avant d'enregistrer le nouveau
          if(isset($_FILES['Photo']) && $_FILES['Photo']['size'] != 0){
              $this->ModelServiceAdmin->delete_image($photosCategorieservice);

              //Enregistrer le nouveau photo

              $config['upload_path'] = './asset/img';
              $config['allowed_types'] = 'jpg|jpeg|png|gif';
              $config['max_size'] = '3000';
              $config['file_name'] = $photosCategorieservice . '.jpg';

              $this->load->library('upload', $config);
              if (!$this->upload->do_upload('Photo')) {
                  echo $this->upload->display_errors();
              }
          }

            $data = array(
                'TITRECATEGORIESERVICE' => $this->input->post('titre_categorie_service'),
                'DETAILCATEGORIESERVICE' => $this->input->post('detail_categorie_service'),
                'AUTEUR' => $_SESSION['username'],
            );
            $this->ModelServiceAdmin->update_categorie(array('IDCATEGORIESERVICE' => $this->input->post('categorie_id')), $data);
            echo json_encode(array("status" => TRUE));

    }

    //Suprimer categorie service
    public function categorie_service_delete($id)
    {
        /*Photos categories services*/
        $categorie = $this->Modelservice->getByCategorieId( $id);
        $photosCategorieservice = $categorie->PHOTOSCATEGORIESERVICE;

        $this->ModelServiceAdmin->delete_image($photosCategorieservice);

        $this->ModelServiceAdmin->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    function categorie_service_add()
    {
        /*Photos categories services*/
        $idCategorieServiceMax = $this->ModelServiceAdmin->toGetIdMaxCategorieService();
        $photosCategorieservice = "PhotosCategorieService".$idCategorieServiceMax;


        if(isset($_FILES["Photo"]["name"]))
        {
            $config['upload_path'] = './asset/img';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size']     = '3000';
            $config['file_name'] = $photosCategorieservice.'.jpg';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('Photo'))
            {
                echo $this->upload->display_errors();
            }
            else
            {

                $data = array(
                    'TITRECATEGORIESERVICE' => $this->input->post('titre_categorie_service'),
                    'DETAILCATEGORIESERVICE' => $this->input->post('detail_categorie_service'),
                    'PHOTOSCATEGORIESERVICE' =>  $photosCategorieservice,
                    'AUTEUR' => $_SESSION['username'],
                    'DATEAJOUT' => date('Y-m-d H-i-s')
                );
               $this->ModelServiceAdmin->categorie_add($data);
                echo json_encode(array("status" => TRUE));
            }
        }
    }
    //--------------------------------------fin categorie service------------------------------------------//
}