<?php
class categorieservice{
	private $idCategorieService;
	private $idLangue;
	private $titreCategorieService;
	private $detailCategorieService;
	private $photosCategorieService;
	private $auteur;
	
	/*Constructor*/
	public function __construct($idLangue,$titreCategorieService,$detailCategorieService,$photosCategorieService,$auteur){
		
		$this->setIdLangue($idLangue);
		$this->setTitreCategorieService($titreCategorieService);
		$this->setDetailCategorieService($detailCategorieService);
		$this->setPhotosCategorieService($photosCategorieService);
		$this->setAuteur($auteur);
		
	}
	/*Getters*/
	public function getIdCategorieService(){
		return $this->idCategorieService;
	}
	public function getIdLangue(){
		return $this->idLangue;
	}
	public function getTitreCategorieService(){
		return $this->titreCategorieService;
	}
	public function getDetailCategorieService(){
		return $this->detailCategorieService;
	}
	public function getPhotosCategorieService(){
		return $this->photosCategorieService;
	}
	
	public function getAuteur(){
		return $this->auteur;
	}
	
	/*Setters*/
	public function setIdCategorieService($idCategorieService){
		$this->idCategorieService = $idCategorieService;
	}
	public function setIdLangue($idLangue){
		$this->idLangue = $idLangue;
	}
	public function setTitreCategorieService($titreCategorieService){
		$this->titreCategorieService = $titreCategorieService;
	}
	public function setDetailCategorieService($detailCategorieService){
		$this->detailCategorieService = $detailCategorieService;
	}
	public function setPhotosCategorieService($photosCategorieService){
		$this->photosCategorieService = $photosCategorieService;
	}
	public function setAuteur($auteur){
		$this->auteur = $auteur;
	}
	
	

	
	


}

?>