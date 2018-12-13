<?php

/**
 * Created by PhpStorm.
 * User: johnyftr
 * Date: 29/11/2018
 * Time: 07:32
 */
class ModelServiceAdmin extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('bdd');
    }

    protected $tableCateg = 'CATEGORIESERVICE';
    protected $tableService = 'ModelServiceAdmin';

    public  function toRequest($req){
        $query =$this->db->query($req);
        return $query->result();
    }
    //-----------------------------------model categorie service--------------------------------------//
    public  function categorie_add($categorie){
        $this->db->insert($this->tableCateg, $categorie);
        return $this->db->insert_id();
    }
    public function toGetIdMaxCategorieService(){
        return $idServicePhotos = $this->bdd->selectMaxId("CATEGORIESERVICE")+1;
    }

    public function delete_by_id($id)
    {
        $this->db->where('IDCATEGORIESERVICE', $id);
        $this->db->delete($this->tableCateg);
    }

    public function update_categorie($where, $data)
    {
        $this->db->update($this->tableCateg, $data, $where);
        return $this->db->affected_rows();
    }
    public function delete_image($file_name){
           return  unlink($_SERVER['DOCUMENT_ROOT']."/auximad/asset/img/$file_name.jpg");
    }
    //-----------------------------------fin model categorie service--------------------------------------//
}