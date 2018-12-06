<?php

/**
 * Created by PhpStorm.
 * User: johnyftr
 * Date: 29/11/2018
 * Time: 07:32
 */
class ModelService extends CI_Model
{
    protected $tableCateg = 'CATEGORIESERVICE';
    protected $tableService = 'ModelService';

    public  function toRequest($req){
        $query =$this->db->query($req);
        return $query->result();
    }
    public  function categorie_add($categorie){
        $this->db->insert($this->tableCateg, $categorie);
        return $this->db->insert_id();
    }
}