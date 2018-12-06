<?php
class secteur{
	private $idSecteur;
	private $idPhotos;
	private $idCategorieSecteur;
	private $idLangue;
	private $titreSecteur;
	private $detailSecteur;
	private $auteur;
	/*Constructor*/
	public function __construct($idSecteur,$idPhotos,$idCategorieSecteur,$idLangue,$titreSecteur,$detailSecteur,$auteur){
		$this->setIdSecteur($idSecteur);
		$this->setIdPhotos($idPhotos);
		$this->setIdCategorieSecteur($idCategorieSecteur);
		$this->setIdLangue($idLangue);
		$this->setTitreSecteur($titreSecteur);
		$this->setDetailSecteur($detailSecteur);
		$this->setAuteur($auteur);
		
	}
	/*Getters*/
	public function getIdSecteur(){
		return $this->idSecteur;
	}
	public function getIdPhotos(){
		return $this->idPhotos;
	}
	public function getIdCategorieSecteur(){
		return $this->idCategorieSecteur;
	}
	public function getIdLangue(){
		return $this->idLangue;
	}
	public function getTitreSecteur(){
		return $this->titreSecteur;
	}
	public function getDetailSecteur(){
		return $this->detailSecteur;
	}
	public function getAuteur(){
		return $this->auteur;
	}
	/*Setters*/
	public function setIdSecteur($idSecteur){
		$this->idSecteur = $idSecteur;
	}
	public function setIdPhotos($idPhotos){
		$this->idPhotos = $idPhotos;
	}
	public function setIdCategorieSecteur($idCategorieSecteur){
		$this->idCategorieSecteur = $idCategorieSecteur;
	}
	public function setIdLangue($idLangue){
		$this->idLangue = $idLangue;
	}
	public function setTitreSecteur($titreSecteur){
		$this->titreSecteur = $titreSecteur;
	}
	public function setDetailSecteur($detailSecteur){
		$this->detailSecteur = $detailSecteur;
	}
	public function setAuteur($auteur){
		$this->auteur = $auteur;
	}
	
	


}

?>