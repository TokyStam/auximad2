<?php

/**
 * Created by PhpStorm.
 * User: johnyftr
 * Date: 12/12/2018
 * Time: 13:40
 */
class ModelPhotoSlide  extends CI_Model
{
    protected $tablePhoto = 'photosslide';

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
    public function toGetPhotoSlide(){
        $requette = "SELECT * FROM  $this->tablePhoto";
        return $this->toRequest($requette);
    }

    //compter le nombre de photo dans la table
    public function count()
    {
        return $this->db->count_all($this->tablePhoto);
    }
    //suprimer photo
    public function delete_by_id($id)
    {
        $this->db->where('IDPHOTOSSLIDE', $id);
        $this->db->delete($this->tablePhoto);
    }

    //ajouter un nouveau photo
    public function photoslide_add($data)
    {
        $this->db->insert($this->tablePhoto, $data);
        return $this->db->insert_id();
    }

    //recupere l'id suivant
    public function toGetIdMaxPhotoSlide(){
        return $idPhotos = $this->bdd->selectMaxId('PHOTOSSLIDE')+1;
    }

    public function delete_image($file_name){
        return  unlink($_SERVER['DOCUMENT_ROOT']."/auximad/asset/img/$file_name.jpg");
    }

    //Modifier photoslide
    public function update_photoslide($where, $data)
    {
        $this->db->update($this->tablePhoto, $data, $where);
        return $this->db->affected_rows();
    }

    //recuperer une photo
    public function getByPhotoSlideId($id)
    {
        $this->db->from($this->tablePhoto);
        $this->db->where('IDPHOTOSSLIDE',$id);
        $query = $this->db->get();

        return $query->row();
    }
}