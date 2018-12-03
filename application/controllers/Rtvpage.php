<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rtvpage extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('assets');
    }

    public function index() {
        $this->load->view('HFF/index_rtv');
    }

    public function declaration() {
        $this->load->view('HFF/pages/declaration');
    }

    public function contact() {
        $this->load->view('HFF/pages/contact');
    }

}
