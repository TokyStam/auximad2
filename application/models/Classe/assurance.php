<?php
class assurance{
	private $idAssurance;
	private $idServiceAssurance;
	private $idLangue;
	private $categorieAssurance;
	private $auteur;

	
	/*Constructor*/
	public function __construct($idServiceAssurance,$idLangue,$categorieAssurance,$auteur){
	
	
		$this->setIdServiceAssurance($idServiceAssurance);
		$this->setIdLangue($idLangue);
		$this->setCategorieAssurance($categorieAssurance);
		$this->setAuteur($auteur);
		
	}
	/*Getters*/
	public function getIdAssurance(){
		return $this->idAssurance;
	}
	public function getIdServiceAssurance(){
		return $this->idServiceAssurance;
	}
	public function getIdLangue(){
		return $this->idLangue;
	}
	public function getCategorieAssurance(){
		return $this->categorieAssurance;
	}
	public function getAuteur(){
		return $this->auteur;
	}
	/*Setters*/
	public function setIdAssurance($idAssurance){
		$this->idAssurance = $idAssurance;
	}
	public function setIdServiceAssurance($idServiceAssurance){
		$this->idServiceAssurance = $idServiceAssurance;
	}
	public function setIdLangue($idLangue){
		$this->idLangue = $idLangue;
	}
	public function setCategorieAssurance($categorieAssurance){
		$this->categorieAssurance = $categorieAssurance;
	}
	public function setAuteur($auteur){
		$this->auteur = $auteur;
	}
}

?>