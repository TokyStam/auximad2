<?php

/**
 * Created by PhpStorm.
 * User: johnyftr
 * Date: 13/12/2018
 * Time: 14:05
 */
class ModelApropos extends CI_Model
{
    protected $tableApropos = 'aproposauximad';
    public function __construct()
    {
        parent::__construct();
        $this->load->model('bdd');
    }

    public  function toRequest($req){
        $query =$this->db->query($req);
        return $query->result();
    }

    //recupere les 3 photos
    public function toGetApropos(){
        $requette = "SELECT * FROM  $this->tableApropos";
        return $this->toRequest($requette);
    }

    //compter le nombre d'apropos dans la table
    public function count()
    {
        return $this->db->count_all($this->tableApropos);
    }

}