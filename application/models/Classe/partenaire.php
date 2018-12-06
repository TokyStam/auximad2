<?php
class partenaire{
	private $idPartenaire;
	private $nomPartenaire;
	private $photosPartenaire;
	private $auteur;
	
	/*Constructor*/
	public function __construct($nomPartenaire,$photosPartenaire,$auteur){
	
		$this->setNomPartenaire($nomPartenaire);
		$this->setPhotosPartenaire($photosPartenaire);
		$this->setAuteur($auteur);
		
	}
	
	/*Getters*/
	public function getIdPartenaire(){
		return $this->idPartenaire;
	}
	public function getNomPartenaire(){
		return $this->nomPartenaire;
	}
	public function getPhotosPartenaire(){
		return $this->photosPartenaire;
	}
	public function getAuteur(){
		return $this->auteur;
	}
	
	/*Setters*/
	public function setIdPartenaire($idPartenaire){
		$this->idPartenaire = $idPartenaire;
	}
	public function setNomPartenaire($nomPartenaire){
		$this->nomPartenaire = $nomPartenaire;
	}
	public function setPhotosPartenaire($photosPartenaire){
		$this->photosPartenaire = $photosPartenaire;
	}
	public function setAuteur($auteur){
		$this->auteur = $auteur;
	}
	

}

?>