<?php
class commentaireblog{
	private $IDCOMMENTAIRE;
	private $IDBLOG;
	private $IDMEMBRE;
	private $IDLANGUE;
	private $COMMENTAIRE;
	
	/*Constructor*/
	public function __construct($IDBLOG,$IDMEMBRE,$IDLANGUE,$COMMENTAIRE){
	
		$this->setIdBlog($IDBLOG);
		$this->setIdMembre($IDMEMBRE);
		$this->setIdlangue($IDLANGUE);
		$this->setCommentaire($COMMENTAIRE);
		
	}
	/*Getters*/
	public function getICommentaire(){
		return $this->IDCOMMENTAIRE;
	}
	public function getIdBlog(){
		return $this->IDBLOG;
	}
	public function getIdMembre(){
		return $this->IDMEMBRE;
	}
	public function getIdLangue(){
		return $this->IDLANGUE;
	}
	public function getCommentaire(){
		return $this->COMMENTAIRE;
	}
	
	
	/*Setters*/
	public function setIdCommentaire($IDCOMMENTAIRE){
		$this->IDCOMMENTAIRE = $IDCOMMENTAIRE;
	}
	public function setIdBlog($IDBLOG){
		$this->IDBLOG = $IDBLOG;
	}
	public function setIdMembre($IDMEMBRE){
		$this->IDMEMBRE = $IDMEMBRE;
	}
	public function setIdlangue($IDLANGUE){
		$this->IDLANGUE = $IDLANGUE;
	}
	public function setCommentaire($COMMENTAIRE){
		$this->COMMENTAIRE = $COMMENTAIRE;
	}

	

}

?>