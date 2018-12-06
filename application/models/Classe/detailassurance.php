<?php
class detailassurance{
	private $idDetailAssurance;
	private $idAssurance;
	private $idLangue;
	private $photosAssurance;
	private $titreDetailAssurance;
	private $descriptionDetailAssurance;
	private $detailAssurance;
	private $auteur;
	
	/*Constructor*/
	public function __construct($idAssurance,$idLangue,$photosAssurance,$titreDetailAssurance,$descriptionDetailAssurance,$detailAssurance,$auteur){
	
		$this->setIdLangue($idAssurance);
		$this->setIdAssurance($idLangue);
		$this->setPhotosAssurance($photosAssurance);
		$this->setTitreDetailAssurance($titreDetailAssurance);
		$this->setDescriptionDetailAssurance($descriptionDetailAssurance);
		$this->setDetailAssurance($detailAssurance);
		$this->setAuteur($auteur);
		
		
	}
	/*Getters*/
	public function getIdDetailAssurance(){
		return $this->idDetailAssurance;
	}
	public function getIdLangue(){
		return $this->idLangue;
	}
	public function getIdAssurance(){
		return $this->idAssurance;
	}
	public function getPhotosAssurance(){
		return $this->photosAssurance;
	}
	public function getTitreDetailAssurance(){
		return $this->titreDetailAssurance;
	}
	public function getDescriptionDetailAssurance(){
		return $this->descriptionDetailAssurance;
	}
	public function getDetailAssurance(){
		return $this->detailAssurance;
	}
	public function getAuteur(){
		return $this->auteur;
	}
	/*Setters*/
	public function setIdDetailAssurance($idDetailAssurance){
		$this->idDetailAssurance = $idDetailAssurance;
	}
	public function setIdLangue($idLangue){
		$this->idLangue = $idLangue;
	}
	public function setIdAssurance($idAssurance){
		$this->idAssurance = $idAssurance;
	}
	public function setPhotosAssurance($photosAssurance){
		$this->photosAssurance = $photosAssurance;
	}
	public function setTitreDetailAssurance($titreDetailAssurance){
		$this->titreDetailAssurance = $titreDetailAssurance;
	}
	public function setDescriptionDetailAssurance($descriptionDetailAssurance){
		$this->descriptionDetailAssurance = $descriptionDetailAssurance;
	}
	public function setDetailAssurance($detailAssurance){
		$this->detailAssurance = $detailAssurance;
	}
	public function setAuteur($auteur){
		$this->auteur = $auteur;
	}
}

?>