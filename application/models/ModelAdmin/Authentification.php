<?php
	class Authentification extends CI_Model{
	
		public function __construct(){
			parent::__construct ();
			$this->load->model('bdd');
			$this->load->database();
		}
		
		public  function toRequest($req){
			$query =$this->db->query($req);
			return $query->result_array();
		}

		//connexion
		public function authentificationAdmin($login, $password){
			$condition = "LOGINADMIN =\"".$login."\" AND MDPADMIN=\"".$password."\"";
			$querry = $this->db->select('*')
								->from('ADMINISTRATEUR')
								->where($condition)
								->limit(1)
								->get();
			return $querry->num_rows()== 1;
		}
		
		public function getNomAdmin($login){
		
			$this->db->select('NOMADMIN');
			$this->db->from('ADMINISTRATEUR');
			$this->db->where(array('LOGINADMIN' => $login));
			$query = $this->db->get();
			foreach ($query->result() as $row){
					return $row->NOMADMIN;
			}
		}
		
		
		
		
		public function authentificationMembre($login, $password){
			$condition = "LOGINMEMBRE =\"".$login."\" AND MDPMEMBRE=\"".$password."\"";
			//echo $condition;
			$querry = $this->db->select('*')
								->from('MEMBRE')
								->where($condition)
								->limit(1)
								->get();
			return $querry->num_rows()== 1;
		}
		
		public function getNomMembre($login){
		
			$requette = "SELECT NOMMEMBRE,PRENOMMEMBRE FROM MEMBRE WHERE LOGINMEMBRE= '$login' ";
			return $this->toRequest($requette);
		}
		
		public function getMembre($IDMEMBRE){
		
			$requette = "SELECT NOMMEMBRE,PRENOMMEMBRE FROM MEMBRE WHERE IDMEMBRE= $IDMEMBRE ";
			return $this->toRequest($requette);
		}
		
		public function getIdMembre($login){
		
			$this->db->select('IDMEMBRE');
			$this->db->from('MEMBRE');
			$this->db->where(array('LOGINMEMBRE' => $login));
			$query = $this->db->get();
			foreach ($query->result() as $row){
					return $row->IDMEMBRE;
			}
		}
		
	}

	
?>