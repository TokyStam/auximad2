<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Modelapropos extends CI_Model
{
    protected $tableCateg = 'CATEGORIEAPROPOS';
    protected $tableApropos = 'APROPOSAUXIMAD';

    public  function toRequest($req){
        $query =$this->db->query($req);
        return $query->result();
    }

    public function toGetListeCategorieApropos(){
        $this->db->from($this->tableCateg);
        $query=$this->db->get();
        return $query->result();
    }

    public function toGetDetailCategorieApropos($idCategorieApropos){
        $this->db->from($this->tableCateg);
        $this->db->where('IDCATEGORIEAPROPOS',$idCategorieApropos);
        $query = $this->db->get();
        return $query->row();
    }

    public function toGetAproposAuximad(){
        $this->db->from($this->tableApropos);
        $query=$this->db->get();
        return $query->result();
    }


}
