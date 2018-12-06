<?php
class photos{
	private $idPhotos;
	private $titrePhotos;
	private $descriptionPhotos;
	
	/*Constructor*/
	public function __construct($idPhotos,$titrePhotos,$descriptionPhotos){
		$this->setIdPhotos($idPhotos);
		$this->setTitrePhotos($titrePhotos);
		$this->setDescriptionPhotos($descriptionPhotos);
		
	}
	/*Getters*/
	public function getIdPhotos(){
		return $this->idPhotos;
	}
	public function getTitrePhotos(){
		return $this->titrePhotos;
	}
	public function getDescriptionPhotos(){
		return $this->descriptionPhotos;
	}
	
	/*Setters*/
	public function setIdPhotos($idPhotos){
		$this->idPhotos = $idPhotos;
	}
	public function setTitrePhotos($titrePhotos){
		$this->titrePhotos = $titrePhotos;
	}
	public function setDescriptionPhotos($descriptionPhotos){
		$this->descriptionPhotos = $descriptionPhotos;
	}
	
	


}

?>