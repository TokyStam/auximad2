<?php

/**
 * Created by PhpStorm.
 * User: johnyftr
 * Date: 13/12/2018
 * Time: 13:58
 */
class Apropos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelAdmin/ModelApropos');
        $this->load->helper('assets');

        //redirection s'il n'y a aucun admin connectE
        if (!isset($_SESSION['username']) && empty($_SESSION['username']) && $_SESSION['is_admin'] == FALSE) {
            redirect('admin/User/login');
        }
    }

    public function index()
    {
        $data['apropos'] = $this->ModelApropos->toGetApropos();
        $data['row'] = $this->ModelApropos->count();
        $this->load->view('admin/apropos', $data);
    }
}