<?php
class contactagence{
	private $idContactAgence;
	private $idAgence;
	private $idLangue;
	private $titre;
	private $nom;
	private $prenom;
	private $telephone;
	private $email;
	private $photosagence;
	private $auteur;
	
	/*Constructor*/
	public function __construct($idAgence,$idLangue,$titre,$nom,$prenom,$telephone,$email,$photosagence,$auteur){
	
		$this->setIdAgence($idAgence);
		$this->setIdLangue($idLangue);
		$this->setTitre($titre);
		$this->setNom($nom);
		$this->setPrenom($prenom);
		$this->setTelephone($telephone);
		$this->setEmail($email);
		$this->setPhotosAgence($photosagence);
		$this->setAuteur($auteur);
		
	}
	/*Getters*/
	public function getIdContactAgence(){
		return $this->idContactAgence;
	}
	public function getIdAgence(){
		return $this->idAgence;
	}
	public function getIdLangue(){
		return $this->idLangue;
	}
	public function getTitre(){
		return $this->titre;
	}
	public function getNom(){
		return $this->nom;
	}
	public function getPrenom(){
		return $this->prenom;
	}
	public function getTelephone(){
		return $this->telephone;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getPhotosAgence(){
		return $this->photosAgence;
	}
	public function getAuteur(){
		return $this->auteur;
	}
	
	/*Setters*/
	public function setIdContactAgence($idContactAgence){
		$this->idContactAgence = $idContactAgence;
	}
	public function setIdAgence($idAgence){
		$this->idAgence = $idAgence;
	}
	public function setIdLangue($idLangue){
		$this->idLangue = $idLangue;
	}
	public function setTitre($titre){
		$this->titre = $titre;
	}
	public function setNom($nom){
		$this->nom = $nom;
	}
	public function setPrenom($prenom){
	  $this->prenom = $prenom;
	}
	public function setTelephone($telephone){
	  $this->telephone = $telephone;
	}
	public function setEmail($email){
	  $this->email = $email;
	}
	public function setPhotosAgence($photosAgence){
	  $this->photosAgence = $photosAgence;
	}
	public function setAuteur($auteur){
		$this->auteur = $auteur;
	}

}

?>