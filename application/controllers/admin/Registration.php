<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('assets');
    }

    public function index() {
        $this->load->view('admin/layout/header');
        $this->load->view('admin/pages/registrationPage');
        $this->load->view('admin/layout/footer');
    }

    
}
