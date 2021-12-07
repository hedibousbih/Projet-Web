<?php
	class article{
		private $titre=null;
		private $contenu=null;
		private $photo=null;
		private $datedecreation=null;
	//	private $contenucom=null;
      //  private $idcommentateur=null;
	//private$datedecreationC=null;
  
		function __construct($titre, $contenu ,$photo,$datedecreation){
			$this->titre=$titre;
			$this->contenu=$contenu;
			$this->photo=$photo;
			$this->datedecreation=$datedecreation;
        
		}
		function gettitre(){
			return $this->titre;
		}
		function getcontenu(){
			return $this->contenu;
		}
	   function getdatedecreation(){
		return $this->datedecreation;
		}
		
		function getphoto(){
			return $this->photo;
		}
		/*
		
		function getcontenucom(){
			return $this->contenucom;
		}
		function getidcommentateur(){
			return $this->idcommentateurA;
		}
        function getdatedecreationC(){
			return $this->datedecreationC;
		}
		*/
		function settitre(string $titre){
			$this->titre=$titre;
		}
		function setcontenu(string $contenu){
			$this->contenu=$contenu;
		}
	    function setdatedecreation(string $datedecreation){
		$this->datedecreation=$datedecreation;
	}
	
		
		function setphoto(string $photo){
			$this->photo=$photo;
		}
		/*
		
		function setcontenucom(string $contenucom){
			$this->contenucom=$contenucom;
		}
        function idcommentateur(string $idcommentateur){
			$this->idcommentateur=$idcommentateur;
		}
        function setdatedecreationC(string $datedecreationC){
			$this->datedecreationCl=$datedecreationC;
		}
		*/
	}


?>