<?php
class categoriesecteur{
	private $idCategorieSecteur;
	private $idLangue;
	private $titreCategorieSecteur;
	private $detailCategorieSecteur;
	private $photosCategorieSecteur;
	private $auteur;
	/*Constructor*/
	public function __construct($idLangue,$titreCategorieSecteur,$detailCategorieSecteur,$photosCategorieSecteur,$auteur){
		
		$this->setIdLangue($idLangue);
		$this->setTitreCategorieSecteur($titreCategorieSecteur);
		$this->setDetailCategorieSecteur($detailCategorieSecteur);
		$this->setPhotosCategorieSecteur($photosCategorieSecteur);
		$this->setAuteur($auteur);
	}
	
	
	/*Getters*/
	public function getIdCategorieSecteur(){
		return $this->idCategorieSecteur;
	}
	public function getIdLangue(){
		return $this->idLangue;
	}
	public function getTitreCategorieSecteur(){
		return $this->titreCategorieSecteur;
	}
	public function getDetailCategorieSecteur(){
		return $this->detailCategorieSecteur;
	}
	public function getPhotosCategorieSecteur(){
		return $this->photosCategorieSecteur;
	}
	public function getAuteur(){
		return $this->auteur;
	}
	/*Setters*/
	public function setIdCategorieSecteur($idCategorieSecteur){
		$this->idCategorieSecteur = $idCategorieSecteur;
	}
	public function setIdLangue($idLangue){
		$this->idLangue = $idLangue;
	}
	public function setTitreCategorieSecteur($titreCategorieSecteur){
		$this->titreCategorieSecteur = $titreCategorieSecteur;
	}
	public function setDetailCategorieSecteur($detailCategorieSecteur){
		$this->detailCategorieSecteur = $detailCategorieSecteur;
	}
	public function setPhotosCategorieSecteur($photosCategorieSecteur){
		$this->photosCategorieSecteur = $photosCategorieSecteur;
	}
	public function setAuteur($auteur){
		$this->auteur = $auteur;
	}
	


}

?>