<?php
class agence{
	private $idAgence;
	private $nomAgence;
	private $codeAgence;
	private $photosAgence;
	private $adresse;
	private $fax;
	private $telephone;
	private $email;
	private $longitude;
	private $latitude;
	private $etat;
	private $auteur;
	
	/*Constructor*/
	public function __construct($nomAgence,$codeAgence,$photosAgence,$adresse,$fax,$telephone,$email,$longitude,$latitude,$etat,$auteur){
	
		$this->setNomAgence($nomAgence);
		$this->setCodeAgence($codeAgence);
		$this->setPhotosAgence($photosAgence);
		$this->setAdresse($adresse);
		$this->setFax($fax);
		$this->setTelephone($telephone);
		$this->setEmail($email);
		$this->setLongitude($longitude);
		$this->setLatitude($latitude);
		$this->setEtat($etat);
		$this->setAuteur($auteur);
		
	}

	/*Getters*/
	public function getIdAgence(){
		return $this->idAgence;
	}
	public function getNomAgence(){
		return $this->nomAgence;
	}
	public function getCodeAgence(){
		return $this->codeAgence;
	}
	public function getPhotosAgence(){
		return $this->photosAgence;
	}
	public function getLongitude(){
		return $this->longitude;
	}
	public function getLatitude(){
		return $this->latitude;
	}
	public function getAdresse(){ 
		return $this->adresse;
	}
	public function getFax(){
		return $this->fax;
	}
	public function getTelephone(){
		return $this->telephone;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getEtat(){
		return $this->etat;
	}
	
	
	public function getAuteur(){
		return $this->auteur;
	}
	
	/*Setters*/
	public function setIdAgence($idAgence){
		$this->idAgence = $idAgence;
	}
	public function setNomAgence($nomAgence){
		$this->nomAgence = $nomAgence;
	}
	public function setCodeAgence($codeAgence){
		$this->codeAgence = $codeAgence;
	}
	public function setPhotosAgence($photosAgence){
		$this->photosAgence = $photosAgence;
	}
	public function setLongitude($longitude){
		$this->longitude = $longitude;
	}
	public function setLatitude($latitude){
	  $this->latitude = $latitude;
	}
	public function setAdresse($adresse){
		 $this->adresse = $adresse;
	}
	public function setFax($fax){
		$this->fax = $fax;
	}
	public function setTelephone($telephone){
		$this->telephone = $telephone ;
	}
	public function setEmail($email){
		$this->email = $email ;
	}
	public function setEtat($etat){
		$this->etat = $etat ;
	}
	public function setAuteur($auteur){
		$this->auteur = $auteur;
	}

}

?>