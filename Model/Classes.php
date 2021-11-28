<?php
	class classes{
		private $idclass=null;
		private $idprof=null;
		private $nomclass=null;
		private $niveau=null;
		private $matiere=null;
		private $duree=null;
		private $datedebut=null;
		// private $datecreation;
		function __construct($idclass,$idprof,$nomclass,$niveau,$matiere,$datedebut,$duree){
			$this->idclass=$idclass;
			$this->idprof=$idprof;
			$this->nomclass=$nomclass;
			$this->niveau=$niveau;
			$this->matiere=$matiere;
			$this->datedebut=$datedebut;
			$this->duree=$duree;
		}
        // Getters
		function getidclass(){
			return $this->idclass;
		}
		
		
		function getnomclass(){
			return $this->nomclass;
		}
		function getduree(){
			return $this->duree;
		}
		function getdatedebut(){
			return $this->datedebut;
		}
		function getidprof(){
			return $this->idprof;
		}
		function getniveau(){
			return $this->niveau;
		}
		function getmatiere(){
			return $this->matiere;
		}
        // Setters
        function setniveau(string $niveau){
			return $this->niveau=$niveau;
		}
		function setmatiere(string $matiere){
			$this->matiere=$matiere;
		}
		function setnomclass(string $nomclass){
			$this->nomclass=$nomclass;
		}
		function setdatedebut(string $datedebut){
			$this->datedebut=$datedebut;
		}
		function setduree(string $duree){
			$this->duree=$duree;
		}
	
	}
/* 	class etudiant{
		private $id=null;
		private $nometd=null;
		private $prenometd=null;
		function __construct($id,$nometd,$prenometd){
			$this->id=$id;
			$this->nometd=$nometd;
			$this->prenometd=$prenometd;
		}
	} */
?>