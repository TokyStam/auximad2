<?php
class serviceassurance{
	private $idServiceAssurance;
	private $idLangue;
	private $serviceAssurance;
	private $auteur;
	
	/*Constructor*/
	public function __construct($idLangue,$serviceAssurance,$auteur){
	
		
		$this->setIdLangue($idLangue);
		$this->setServiceAssurance($serviceAssurance);
		$this->setAuteur($auteur);
		
	}
	/*Getters*/
	public function getIdServiceAssurance(){
		return $this->idServiceAssurance;
	}
	public function getIdLangue(){
		return $this->idLangue;
	}
	public function getServiceAssurance(){
		return $this->serviceAssurance;
	}
	public function getAuteur(){
		return $this->auteur;
	}
	/*Setters*/
	public function setIdServiceAssurance($idServiceAssurance){
		$this->idServiceAssurance = $idServiceAssurance;
	}
	public function setIdLangue($idLangue){
		$this->idLangue = $idLangue;
	}
	public function setServiceAssurance($serviceAssurance){
		$this->serviceAssurance = $serviceAssurance;
	}
	public function setAuteur($auteur){
		$this->auteur = $auteur;
	}
}

?>