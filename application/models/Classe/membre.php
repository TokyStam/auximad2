<?php
class membre{
	private $idMembre;
	private $idCategorieSecteur;
	private $nomMembre;
	private $prenomMembre;
	private $loginMembre;
	private $mdpMembre;
	
	/*Constructor*/
	public function __construct($idCategorieSecteur,$nomMembre,$prenomMembre,$loginMembre,$mdpMembre){
		
		$this->setIdCategorieSecteur($idCategorieSecteur);
		$this->setNomMembre($nomMembre);
		$this->setPrenomMembre($prenomMembre);
		$this->setLoginMembre($loginMembre);
		$this->setMdpMembre($mdpMembre);
		
		
	}
	/*Getters*/
	public function getIdMembre(){
		return $this->idMembre;
	}
	public function getIdCategorieSecteur(){
		return $this->idCategorieSecteur;
	}
	public function getNomMembre(){
		return $this->nomMembre;
	}
	public function getPrenomMembre(){
		return $this->prenomMembre;
	}
	public function getLoginMembre(){
		return $this->loginMembre;
	}
	public function getMdpMembre(){
		return $this->mdpMembre;
	}
	
	
	/*Setters*/
	public function setIdMembre($idMembre){
		$this->idMembre = $idMembre;
	}
	public function setIdCategorieSecteur($idCategorieSecteur){
		$this->idCategorieSecteur = $idCategorieSecteur;
	}
	public function setNomMembre($nomMembre){
		$this->nomMembre = $nomMembre;
	}
	public function setPrenomMembre($prenomMembre){
		$this->prenomMembre = $prenomMembre;
	}
	public function setLoginMembre($loginMembre){
		$this->loginMembre = $loginMembre;
	}
	public function setMdpMembre($mdpMembre){
		$this->mdpMembre = $mdpMembre;
	}



}

?>