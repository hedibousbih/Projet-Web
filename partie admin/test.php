<?php
	class Adherent{
		private $numadherent=null;
		private $nom=null;
		private $prenom=null;
		private $adresse=null;
		private $email=null;
		private $dateinscription;
		
		private $password=null;
		function __construct($numadherent, $nom, $prenom, $adresse, $email, $dateinscription){
			$this->numadherent=$numadherent;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->adresse=$adresse;
			$this->email=$email;
			$this->dateinscription=$dateinscription;
		}
		function getNumadherent(){
			return $this->numadherent;
		}
		function getNom(){
			return $this->nom;
		}
		function getPrenom(){
			return $this->prenom;
		}
		function getAdresse(){
			return $this->adresse;
		}
		function getEmail(){
			return $this->email;
		}
		function getDateinscription(){
			return $this->dateinscription;
		}
		function setNom(string $nom){
			$this->nom=$nom;
		}
		function setPrenom(string $prenom){
			$this->prenom=$prenom;
		}
		function setAdresse(string $adresse){
			$this->adresse=$adresse;
		}
		function setEmail(string $email){
			$this->email=$email;
		}
		function setdateinscription(string $dateinscription){
			$this->dateinscription=$dateinscription;
		}
		
	}


?>