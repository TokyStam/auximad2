<?php
class aproposauximad{
	private $idApropos;
	private $idLangue;
	private $apropos;
	private $auteur;
	
	/*Constructor*/
	public function __construct($idLangue,$apropos,$auteur){
		$this->setIdLangue($idLangue);
		$this->setApropos($apropos);
		$this->setAuteur($auteur);
	}
	
	
	/*Getters*/
	public function getIdApropos(){
		return $this->idApropos;
	}
	public function getIdLangue(){
		return $this->idLangue;
	}
	public function getApropos(){
		return $this->apropos;
	}
	public function getAuteur(){
		return $this->auteur;
	}
	
	/*Setters*/
	public function setIdApropos($idApropos){
		$this->idApropos = $idApropos;
	}
	public function setIdLangue($idLangue){
		$this->idLangue = $idLangue;
	}
	
	public function setApropos($apropos){
		$this->apropos = $apropos;
	}
	public function setAuteur($auteur){
		$this->auteur = $auteur;
	}
	
	


}

?>