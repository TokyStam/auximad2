<?php
class administrateur{
	private $idAdmin;
	private $idTypeAdmin;
	private $idAgence;
	private $nomAdmin;
	private $prenomAdmin;
	private $loginAdmin;
	private $mdpAdmin;
	
	/*Constructor*/
	public function __construct($idAdmin,$idTypeAdmin,$idAgence,$nomAdmin,$prenomAdmin,$loginAdmin,$mdpAdmin){
		$this->setIdAdmin($idAdmin);
		$this->setIdTypeAdmin($idTypeAdmin);
		$this->setIdAgence($idAgence);
		$this->setNomAdmin($nomAdmin);
		$this->setPrenomAdmin($prenomAdmin);
		$this->setLoginAdmin($loginAdmin);
		$this->setMdpAdmin($mdpAdmin);
		
	}
	/*Getters*/
	public function getIdAdmin(){
		return $this->idAdmin;
	}
	public function getIdTypeAdmin(){
		return $this->idTypeAdmin;
	}
	public function getIdAgence(){
		return $this->idAgence;
	}
	public function getNomAdmin(){
		return $this->nomAdmin;
	}
	public function getPrenomAdmin(){
		return $this->prenomAdmin;
	}
	public function getLoginAdmin(){
		return $this->loginAdmin;
	}
	public function getMdpAdmin(){
		return $this->mdpAdmin;
	}
	
	/*Setters*/
	public function setIdAdmin($idAdmin){
		$this->idAdmin = $idAdmin;
	}
	public function setIdTypeAdmin($idTypeAdmin){
		$this->idTypeAdmin = $idTypeAdmin;
	}
	public function setIdAgence($idAgence){
		$this->idAgence = $idAgence;
	}
	public function setNomAdmin($nomAdmin){
		$this->nomAdmin = $nomAdmin;
	}
	public function setPrenomAdmin($prenomAdmin){
		$this->prenomAdmin = $prenomAdmin;
	}
	public function setLoginAdmin($loginAdmin){
		$this->loginAdmin = $loginAdmin;
	}
	public function setMdpAdmin($mdpAdmin){
		$this->mdpAdmin = $mdpAdmin;
	}
	
	
	
	
}
?>