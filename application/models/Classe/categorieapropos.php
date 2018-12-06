<?php
class categorieapropos{
	private $idCategorieApropos;
	private $idLangue;
	private $titreCategorieApropos;
	private $detailCategorieApropos;
	private $auteur;
	
	/*Constructor*/
	public function __construct($idLangue,$titreCategorieApropos,$detailCategorieApropos,$auteur){
		
		$this->setIdLangue($idLangue);
		$this->setTitreCategorieApropos($titreCategorieApropos);
		$this->setDetailCategorieApropos($detailCategorieApropos);
		$this->setAuteur($auteur);
	}
	
	
	/*Getters*/
	public function getIdCategorieApropos(){
		return $this->idCategorieApropos;
	}
	public function getIdLangue(){
		return $this->idLangue;
	}
	public function getTitreCategorieApropos(){
		return $this->titreCategorieApropos;
	}
	public function getDetailCategorieApropos(){
		return $this->detailCategorieApropos;
	}
	public function getAuteur(){
		return $this->auteur;
	}
	/*Setters*/
	public function setIdCategorieApropos($idCategorieApropos){
		$this->idCategorieApropos = $idCategorieApropos;
	}
	public function setIdLangue($idLangue){
		$this->idLangue = $idLangue;
	}
	
	public function setTitreCategorieApropos($titreCategorieApropos){
		$this->titreCategorieApropos = $titreCategorieApropos;
	}
	
	public function setDetailCategorieApropos($detailCategorieApropos){
		$this->detailCategorieApropos = $detailCategorieApropos;
	}
	public function setAuteur($auteur){
		$this->auteur = $auteur;
	}
	
}

?>