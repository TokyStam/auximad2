<?php
class aproposassurance{
	private $idAproposAssurance;
	private $idLangue;
	private $aproposAssurance;
	private $agenceAssurance;
	private $auteur;

	
	/*Constructor*/
	public function __construct($idLangue,$aproposAssurance,$agenceAssurance,$auteur){
	
	
	
		$this->setIdLangue($idLangue);
		$this->setAproposAssurance($aproposAssurance);
		$this->setAgenceAssurance($agenceAssurance);
		$this->setAuteur($auteur);
		
	}
	/*Getters*/
	public function getIdAproposAssurance(){
		return $this->idAproposAssurance;
	}
	
	public function getIdLangue(){
		return $this->idLangue;
	}
	public function getAproposAssurance(){
		return $this->aproposAssurance;
	}
	public function getAgenceAssurance(){
		return $this->agenceAssurance;
	}
	public function getAuteur(){
		return $this->auteur;
	}
	/*Setters*/
	public function setIdAproposAssurance($idAproposAssurance){
		$this->idAproposAssurance = $idAproposAssurance;
	}
	public function setIdLangue($idLangue){
		$this->idLangue = $idLangue;
	}
	public function setAproposAssurance($aproposAssurance){
		$this->aproposAssurance = $aproposAssurance;
	}
	public function setAgenceAssurance($agenceAssurance){
		$this->agenceAssurance = $agenceAssurance;
	}
	public function setAuteur($auteur){
		$this->auteur = $auteur;
	}
}

?>