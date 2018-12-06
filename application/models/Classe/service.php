<?php
class service{
	private $idService;
	private $photosService;
	private $idCategorieService;
	private $idLangue;
	private $titreService;
	private $detailService;
	private $auteur;
	
	/*Constructor*/
	public function __construct($idCategorieService,$idLangue,$titreService,$detailService,$photosService,$auteur){
	
		$this->setPhotosService($photosService);
		$this->setIdCategorieService($idCategorieService);
		$this->setIdLangue($idLangue);
		$this->setTitreService($titreService);
		$this->setDetailService($detailService);
		$this->setAuteur($auteur);
		
	}
	/*Getters*/
	public function getIdService(){
		return $this->idService;
	}
	public function getPhotosService(){
		return $this->photosService;
	}
	public function getIdCategorieService(){
		return $this->idCategorieService;
	}
	public function getIdLangue(){
		return $this->idLangue;
	}
	public function getTitreService(){
		return $this->titreService;
	}
	public function getDetailService(){
		return $this->detailService;
	}
	public function getAuteur(){
		return $this->auteur;
	}
	/*Setters*/
	public function setIdService($idService){
		$this->idService = $idService;
	}
	public function setPhotosService($photosService){
		$this->photosService = $photosService;
	}
	public function setIdCategorieService($idCategorieService){
		$this->idCategorieService = $idCategorieService;
	}
	public function setIdLangue($idLangue){
		$this->idLangue = $idLangue;
	}
	public function setTitreService($titreService){
		$this->titreService = $titreService;
	}
	public function setDetailService($detailService){
		$this->detailService = $detailService;
	}
	public function setAuteur($auteur){
		$this->auteur = $auteur;
	}
	


}

?>