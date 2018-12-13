<?php
include_once "Classe/categorieservice.php";
include_once "Classe/categoriesecteur.php";
include_once "Classe/categorieapropos.php";
include_once "Classe/service.php";
include_once "Classe/blog.php";
include_once "Classe/membre.php";
include_once "Classe/agence.php";
include_once "Classe/partenaire.php";
include_once "Classe/contactagence.php";
include_once "Classe/aproposauximad.php";
include_once "Classe/serviceassurance.php";
include_once "Classe/assurance.php";
include_once "Classe/detailassurance.php";
include_once "Classe/presse.php";
include_once "Classe/aproposassurance.php";
include_once "Classe/commentaireblog.php";

class bdd extends CI_MODEL{
	
    function __construct(){
        parent::__construct();
    }

	
	function getTypeId($table){
		if($table == "SERVICE"){
			$id = "IDSERVICE";
		}
		if($table == "APROPOSAUXIMAD"){
			$id = "IDAPROPOS";
		}
		if($table == "CATEGORIESERVICE"){
			$id = "IDCATEGORIESERVICE";
		}
		if($table == "CATEGORIESECTEUR"){
			$id = "IDCATEGORIESECTEUR";
		}
		if($table == "BLOG"){
			$id = "IDBLOG";
		}
		if($table == "MEMBRE"){
			$id = "IDMEMBRE";
		}
		if($table == "PARTENAIRE"){
			$id = "IDPARTENAIRE";
		}
		if($table == "AGENCE"){
			$id = "IDAGENCE";
		}
		if($table == "CONTACTAGENCE"){
			$id = "IDCONTACTAGENCE";
		}
		if($table == "CATEGORIEAPROPOS"){
			$id = "IDCATEGORIEAPROPOS";
		}
		if($table == "DETAILASSURANCE"){
			$id = "IDDETAILASSURANCE";
		}
		if($table == "SERVICEASSURANCE"){
			$id = "IDSERVICEASSURANCE";
		}
		if($table == "ASSURANCE"){
			$id = "IDASSURANCE";
		}
		if($table == "PRESSE"){
			$id = "IDPRESSE";
		}
		if($table == "APROPOSASSURANCE"){
			$id = "IDAPROPOSASSURANCE";
		}
		if($table == "COMMENTAIRE_BLOG"){
			$id = "IDCOMMENTAIRE";
		}
        if($table == "PHOTOSSLIDE"){
            $id = "IDPHOTOSSLIDE";
        }
		return $id;
	}
	
	function selectMaxId($table){
		$typeId = $this->getTypeId($table);
		$req = "SELECT max(".$typeId.") AS max FROM ".$table;
		$query = $this->db->query($req);
		foreach($query->result() as $ligne){
			$max = $ligne->max;
		}
		if(empty($max)){
			return 0;
		}
		return $max;
	}
	

	
	function selectMaxNumero($table){
		$numeroPhotos = $this->getTypeNumeroPhotos($table);
		$req = "SELECT max(".$numeroPhotos.") AS max FROM ".$table;
		$query = $this->db->query($req);
		foreach($query->result() as $ligne){
			$max = $ligne->max;
		}
		if(empty($max)){
			return 0;
		}
		return $max;
	}

	
	function createService($table,$objet){
		if($table == "SERVICE"){
			$req = "INSERT INTO SERVICE (IDCATEGORIESERVICE,IDLANGUE,TITRESERVICE,DETAILSERVICE,PHOTOSSERVICE,AUTEUR,DATEAJOUT) VALUES(".$objet->getIdCategorieService().",".$objet->getIdLangue().",'".$objet->getTitreService()."','".$objet->getDetailService()."','".$objet->getPhotosService()."','".$objet->getAuteur()."',NOW())";
		}
		if($table == "CATEGORIESERVICE"){
			$req = "INSERT INTO CATEGORIESERVICE (IDLANGUE,TITRECATEGORIESERVICE,DETAILCATEGORIESERVICE,PHOTOSCATEGORIESERVICE,AUTEUR,DATEAJOUT) VALUES(".$objet->getIdLangue().",'".$objet->getTitreCategorieService()."','".$objet->getDetailCategorieService()."','".$objet->getPhotosCategorieService()."','".$objet->getAuteur()."',NOW())";
		}
		
		$this->db->query($req);
	}
	
	function create($table,$objet){
		if($table == "BLOG"){
			$req = "INSERT INTO BLOG (IDLANGUE,TITREBLOG,DESCRIPTIONBLOG,DETAILBLOG,PHOTOSBLOG,DATEBLOG,AUTEUR,DATEAJOUT) VALUES(".$objet->getIdLangue().",'".$objet->getTitreBlog()."','".$objet->getDescriptionBlog()."','".$objet->getDetailBlog()."','".$objet->getPhotosBlog()."','".$objet->getDateBlog()."','".$objet->getAuteur()."',NOW())";
		}
		
		if($table == "MEMBRE"){
			$req = "INSERT INTO MEMBRE(IDCATEGORIESECTEUR,NOMMEMBRE,PRENOMMEMBRE,LOGINMEMBRE,MDPMEMBRE) VALUES (".$objet->getIdCategorieSecteur().",'".$objet->getNomMembre()."','".$objet->getPrenomMembre()."','".$objet->getLoginMembre()."','".$objet->getMdpMembre()."')";
		}
		
		if($table == "AGENCE"){
			$req = "INSERT INTO AGENCE (NOMAGENCE,CODEAGENCE,PHOTOSAGENCE,ADRESSE,FAX,TELEPHONE,EMAIL,LONGITUDE,LATITUDE,ETAT,AUTEUR,DATEAJOUT)VALUES('".$objet->getNomAgence()."','".$objet->getCodeAgence()."','".$objet->getPhotosAgence()."','".$objet->getAdresse()."','".$objet->getFax()."', '".$objet->getTelephone()."','".$objet->getEmail()."','".$objet->getLongitude()."','".$objet->getLatitude()."','".$objet->getEtat()."','".$objet->getAuteur()."',NOW())";
		}
		if($table == "PARTENAIRE"){
			$req = "INSERT INTO PARTENAIRE (NOMPARTENAIRE,PHOTOSPARTENAIRE,AUTEUR,DATEAJOUT) VALUES('".$objet->getNomPartenaire()."','".$objet->getPhotosPartenaire()."','".$objet->getAuteur()."',NOW())";
		}
		if($table == "CONTACTAGENCE"){
			$req = "INSERT INTO CONTACTAGENCE (IDAGENCE,IDLANGUE,TITRE,NOM,PRENOM,TELEPHONE,EMAIL,PHOTOSCONTACT,AUTEUR,DATEAJOUT) VALUES(".$objet->getIdAgence().",".$objet->getIdLangue().",'".$objet->getTitre()."','".$objet->getNom()."','".$objet->getPrenom()."','".$objet->getTelephone()."','".$objet->getEmail()."','".$objet->getPhotosAgence()."','".$objet->getAuteur()."',NOW())";
		}
		if($table == "CATEGORIESECTEUR"){
			$req = "INSERT INTO CATEGORIESECTEUR(IDLANGUE,TITRECATEGORIESECTEUR,DETAILCATEGORIESECTEUR,PHOTOSCATEGORIESECTEUR,AUTEUR,DATEAJOUT)  VALUES(".$objet->getIdLangue().",'".$objet->getTitreCategorieSecteur()."','".$objet->getDetailCategorieSecteur()."','".$objet->getPhotosCategorieSecteur()."','".$objet->getAuteur()."',NOW())"; //bol apina photos
		}
		if($table == "CATEGORIEAPROPOS"){
			$req = "INSERT INTO CATEGORIEAPROPOS (IDLANGUE,TITRECATEGORIEAPROPOS,DETAILCATEGORIEAPROPOS,AUTEUR,DATEAJOUT) VALUES(".$objet->getIdLangue().",'".$objet->getTitreCategorieApropos()."','".$objet->getDetailCategorieApropos()."','".$objet->getAuteur()."',NOW())";
		}
		if($table == "APROPOSAUXIMAD"){
			$req = "INSERT INTO APROPOSAUXIMAD(IDLANGUE,APROPOS,AUTEUR,DATEAJOUT) VALUES(".$objet->getIdLangue().",'".$objet->getApropos()."','".$objet->getAuteur()."',NOW())";
		}
		if($table == "DETAILASSURANCE"){
			$req = "INSERT INTO DETAILASSURANCE(IDASSURANCE,IDLANGUE,PHOTOSASSURANCE,TITREDETAILASSURANCE,DESCRIPTIONDETAILASSURANCE,DETAILASSURANCE,AUTEUR,DATEAJOUT) VALUES(".$objet->getIdLangue().",".$objet->getIdAssurance().",'".$objet->getPhotosAssurance()."','".$objet->getTitreDetailAssurance()."','".$objet->getDescriptionDetailAssurance()."','".$objet->getDetailAssurance()."','".$objet->getAuteur()."',NOW())";
		}
		if($table == "SERVICEASSURANCE"){
			$req = "INSERT INTO SERVICEASSURANCE (IDLANGUE,SERVICEASSURANCE,AUTEUR,DATEAJOUT) VALUES(".$objet->getIdLangue().",'".$objet->getServiceAssurance()."','".$objet->getAuteur()."',NOW())";
		}
		if($table == "ASSURANCE"){
			$req = "INSERT INTO ASSURANCE (IDSERVICEASSURANCE,IDLANGUE,CATEGORIEASSURANCE,AUTEUR,DATEAJOUT) VALUES(".$objet->getIdServiceAssurance().",".$objet->getIdLangue().",'".$objet->getCategorieAssurance()."','".$objet->getAuteur()."',NOW())";
		}
		if($table == "PRESSE"){
			$req = "INSERT INTO PRESSE (IDLANGUE,TITREPRESSE,DETAILPRESSE,PHOTOSPRESSE,AUTEUR,DATEAJOUT) VALUES(".$objet->getIdLangue().",'".$objet->getTitrePresse()."','".$objet->getDetailPresse()."','".$objet->getPhotosPresse()."','".$objet->getAuteur()."',NOW())";
		}
		
		if($table == "APROPOSASSURANCE"){
			$req = "INSERT INTO APROPOSASSURANCE (IDLANGUE,APROPOSASSURANCE,AGENCEASSURANCE,AUTEUR,DATEAJOUT) VALUES(".$objet->getIdLangue().",'".$objet->getAproposAssurance()."','".$objet->getAgenceAssurance()."','".$objet->getAuteur()."',NOW())";
		}
		
		if($table == "COMMENTAIRE_BLOG"){
			$req = "INSERT INTO COMMENTAIRE_BLOG (IDBLOG,IDMEMBRE,IDLANGUE,COMMENTAIRE,DATEAJOUT) VALUES(".$objet->getIdBlog().",".$objet->getIdMembre().",".$objet->getIdLangue().",'".$objet->getCommentaire()."',NOW())";
			
		}
		$this->db->query($req);
	}
}

?>