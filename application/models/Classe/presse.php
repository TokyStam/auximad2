<?php
class presse{
	private $idPresse;
	private $idLangue;
	private $titrePresse;
	private $detailPresse;
	private $photosPresse;
	private $auteur;
	/*Constructor*/
	public function __construct($idLangue,$titrePresse,$detailPresse,$photosPresse,$auteur){
	
	
		$this->setIdLangue($idLangue);
		$this->setTitrePresse($titrePresse);
		$this->setDetailPresse($detailPresse);
		$this->setPhotosPresse($photosPresse);
		$this->setAuteur($auteur);
		
	}
	/*Getters*/
	public function getIdPresse(){
		return $this->idPresse;
	}
	public function getIdLangue(){
		return $this->idLangue;
	}
	public function getTitrePresse(){
		return $this->titrePresse;
	}
	
	public function getDetailPresse(){
		return $this->detailPresse;
	}
	public function getPhotosPresse(){
		return $this->photosPresse;
	}
	
	public function getAuteur(){
		return $this->auteur;
	}
	
	/*Setters*/
	public function setIdPresse($idPresse){
		$this->idPresse = $idPresse;
	}
	public function setIdLangue($idLangue){
		$this->idLangue = $idLangue;
	}
	public function setTitrePresse($titrePresse){
		$this->titrePresse = $titrePresse;
	}
	
	public function setDetailPresse($detailPresse){
		$this->detailPresse = $detailPresse;
	}
	public function setPhotosPresse($photosPresse){
		$this->photosPresse = $photosPresse;
	}

	public function setAuteur($auteur){
		$this->auteur = $auteur;
	}
	

}

?>