<?php

/**
 * Created by PhpStorm.
 * User: johnyftr
 * Date: 29/11/2018
 * Time: 07:32
 */
class Modelservice extends CI_Model
{
    protected $tableCateg = 'CATEGORIESERVICE';
    protected $tableService = 'SERVICE';

    public  function toRequest($req){
        $query =$this->db->query($req);
        return $query->result();
    }

    //liste titre service par categorie langue
    public function toGetTitreService($titrecategorieservice=''){
        $requette = "SELECT IDSERVICE,TITRESERVICE FROM SERVICE JOIN CATEGORIESERVICE ON CATEGORIESERVICE.IDCATEGORIESERVICE = SERVICE.IDCATEGORIESERVICE
			WHERE CATEGORIESERVICE.TITRECATEGORIESERVICE =$titrecategorieservice;";
        return $this->toRequest($requette);
    }

    public function toGetCategorieService(){
        $requette = "SELECT IDCATEGORIESERVICE,TITRECATEGORIESERVICE, DETAILCATEGORIESERVICE FROM  CATEGORIESERVICE ;";
        return $this->toRequest($requette);
    }

    public function toGetDetailCategorieService($idCategorieService){
        $requette = "SELECT * FROM  CATEGORIESERVICE WHERE IDCATEGORIESERVICE = $idCategorieService;";
        return $this->toRequest($requette);
    }

    public function toGetDetailService($idService){
        $requette = "SELECT IDSERVICE,TITRECATEGORIESERVICE,TITRESERVICE,DETAILSERVICE,PHOTOSSERVICE FROM  SERVICE
				JOIN CATEGORIESERVICE ON CATEGORIESERVICE.IDCATEGORIESERVICE= SERVICE.IDCATEGORIESERVICE  WHERE IDSERVICE = $idService;";
        return $this->toRequest($requette);
    }


    //get liste service par categorie service
    public function toGetListeService($categorieService){
        $requette = "SELECT IDSERVICE,SERVICE.IDCATEGORIESERVICE,SERVICE.IDLANGUE,TITRESERVICE,DETAILSERVICE,PHOTOSSERVICE
			FROM  SERVICE JOIN CATEGORIESERVICE ON CATEGORIESERVICE.IDCATEGORIESERVICE = SERVICE.IDCATEGORIESERVICE WHERE TITRECATEGORIESERVICE= '$categorieService';";
        return $this->toRequest($requette);
    }
}