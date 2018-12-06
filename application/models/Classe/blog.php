<?php
class blog{
	private $idBlog;
	private $idLangue;
	private $titreBlog;
	private $descriptionBlog;
	private $detailBlog;
	private $photosBlog;
	private $dateBlog;
	private $auteur;
	/*Constructor*/
	public function __construct($idLangue,$titreBlog,$descriptionBlog,$detailBlog,$photosBlog,$dateBlog,$auteur){
	
	
		$this->setIdLangue($idLangue);
		$this->setTitreBlog($titreBlog);
		$this->setDescriptionBlog($descriptionBlog);
		$this->setDetailBlog($detailBlog);
		$this->setPhotosBlog($photosBlog);
		$this->setDateBlog($dateBlog);
		$this->setAuteur($auteur);
		
	}
	/*Getters*/
	public function getIdBlog(){
		return $this->idBlog;
	}
	public function getIdLangue(){
		return $this->idLangue;
	}
	public function getTitreBlog(){
		return $this->titreBlog;
	}
	public function getDescriptionBlog(){
		return $this->descriptionBlog;
	}
	public function getDetailBlog(){
		return $this->detailBlog;
	}
	public function getPhotosBlog(){
		return $this->photosBlog;
	}
	public function getDateBlog(){
		return $this->dateBlog;
	}
	public function getAuteur(){
		return $this->auteur;
	}
	
	/*Setters*/
	public function setIdBlog($idBlog){
		$this->idBlog = $idBlog;
	}
	public function setIdLangue($idLangue){
		$this->idLangue = $idLangue;
	}
	public function setTitreBlog($titreBlog){
		$this->titreBlog = $titreBlog;
	}
	public function setDescriptionBlog($descriptionBlog){
		$this->descriptionBlog = $descriptionBlog;
	}
	public function setDetailBlog($detailBlog){
		$this->detailBlog = $detailBlog;
	}
	public function setPhotosBlog($photosBlog){
		$this->photosBlog = $photosBlog;
	}
	public function setDateBlog($dateBlog){
		$this->dateBlog = $dateBlog;
	}
	public function setAuteur($auteur){
		$this->auteur = $auteur;
	}
	

}

?>