<?php
	class user{
		private $username=null;
		private $userlastname=null;
		private $email=null;
		private $pwd=null;
        private $status=null;
        private $usertype1=null;
        private $metier=null;


		function __construct($username, $userlastname, $email, $pwd, $status ,$usertype1 ,$metier){
			$this->username=$username;
			$this->userlastname=$userlastname;
			$this->email=$email;
			$this->pwd=$pwd;
	        $this->status=$status;
	        $this->usertype1=$usertype1;
			$this->metier=$metier;
	
	
		}
		function getusername(){
			return $this->username;
		}
		function getuserlastname(){
			return $this->userlastname;
		}
		function getemail(){
			return $this->email;
		}
		function getpwd(){
			return $this->pwd;
		}
		function getstatus(){
			return $this->status;
		}
		function getusertype1(){
			return $this->usertype1;
		}
		function getmetier(){
			return $this->metier;
		}
	
		function setusername(string $username){
			$this->username=$username;
		}
		function setuserlastname(string $userlastname){
			$this->userlastname=$userlastname;
		}
		function setemail(string $email){
			$this->email=$email;
		}
		function setpwd(string $pwd){
			$this->pwd=$pwd;
		} 
		function setstatus(string $status){
			$this->status=$status;
		} 
	    function setusertype1(string $usertype1){
			$this->usertype1=$usertype1;
		} 
		function setmetier(string $metier){
			$this->metier=$metier;
		} 
	
	}
	
?>