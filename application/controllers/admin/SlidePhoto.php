<?php

/**
 * Created by PhpStorm.
 * User: johnyftr
 * Date: 05/12/2018
 * Time: 12:58
 */
class SlidePhoto extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelAdmin/ModelPhotoSlide');
        $this->load->helper('assets');

        //redirection s'il n'y a aucun admin connectE
        if (!isset($_SESSION['username']) && empty($_SESSION['username']) && $_SESSION['is_admin'] == FALSE) {
            redirect('admin/User/login');
        }
    }

    public function index()
    {
        $data['photosslide'] = $this->ModelPhotoSlide->toGetPhotoSlide();
        $data['row'] = $this->ModelPhotoSlide->count();
        $this->load->view('admin/photoslide', $data);
    }

    public function photo_delete($id)
    {
        $data = $this->ModelPhotoSlide->getByPhotoSlideId($id);
        $photosSlideSuivant = $data->PHOTOSSLIDE;

            $this->ModelPhotoSlide->delete_image($photosSlideSuivant);

        $this->ModelPhotoSlide->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    function photoslide_add()
    {
        /*Photos slide*/
        $idPhotoslideMax = $this->ModelPhotoSlide->toGetIdMaxPhotoSlide();
        $photosSlideSuivant = "slide".$idPhotoslideMax;


        if(isset($_FILES["Photo"]["name"])) {
            $config['upload_path'] = './asset/img';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '3000';
            $config['file_name'] = $photosSlideSuivant . '.jpg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('Photo')) {
                echo $this->upload->display_errors();
            }
        }

                $data = array(
                    'TITREPHOTOSSLIDE' => $this->input->post('titre_photo_slide'),
                    'PHOTOSSLIDE' =>  $photosSlideSuivant,
                    'AUTEUR' => $_SESSION['username'],
                    'DATEAJOUT' => date('Y-m-d H-i-s')
                );
                $this->ModelPhotoSlide->photoslide_add($data);
                echo json_encode(array("status" => TRUE));
    }

    function photoslide_update()
    {
        $data = $this->ModelPhotoSlide->getByPhotoSlideId($this->input->post('photoslide_id'));
        $photosSlideSuivant = $data->PHOTOSSLIDE;

        //suprimer l'ancien photo avant d'enregistrer le nouveau
        if (isset($_FILES['Photo']) && $_FILES['Photo']['size'] != 0) {
                $this->ModelPhotoSlide->delete_image($photosSlideSuivant);

                $config['upload_path'] = './asset/img';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = '3000';
                $config['file_name'] = $photosSlideSuivant . '.jpg';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('Photo')) {
                    echo $this->upload->display_errors();
                }
        }

        $data = array(
            'TITREPHOTOSSLIDE' => $this->input->post('titre_photo_slide'),
            'AUTEUR' => $_SESSION['username'],
            'DATEAJOUT' => date('Y-m-d H-i-s')
        );
        $this->ModelPhotoSlide->update_photoslide(array('IDPHOTOSSLIDE' => $this->input->post('photoslide_id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id)
    {
        $data = $this->ModelPhotoSlide->getByPhotoSlideId($id);
        echo json_encode($data);
    }
}