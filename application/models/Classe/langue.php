<?php
class langue{
	private $idLangue;
	private $langue;
	
	/*Constructor*/
	public function __construct($idLangue,$langue){
		
		$this->setIdLangue($idLangue);
		$this->setLangue($langue);
		
	}
	/*Getters*/
	public function getIdLangue(){
		return $this->idLangue;
	}
	public function getLangue(){
		return $this->langue;
	}
	
	/*Setters*/
	public function setIdLangue($idLangue){
		$this->idLangue = $idLangue;
	}
	public function setLangue($langue){
		$this->langue = $langue;
	}
}

?>