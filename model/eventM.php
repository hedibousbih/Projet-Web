<?php 
class event {
    
    private $Nom_event;
    private $Lieu;
    private $DateD;
    private $DateF;
    private $Nom_organisateur;
    private $Description;
    private $Affiche;
    private $Theme;
    private $Id_event;

   public function __construct($Nom_event,$Lieu,$DateD,$DateF,$Description,$Nom_organisateur,$Affiche,$Theme,$Id_event){
       
        
        $this->Nom_event=$Nom_event;
        $this->Lieu=$Lieu;
        $this->DateD=$DateD;
        $this->DateF=$DateF;
        $this->Nom_organisateur=$Nom_organisateur;
        $this->Description=$Description;
        $this->Affiche=$Affiche;
        $this->Theme=$Theme;
        $this->Id_event=$Id_event;
    }

    //GETTERS
    
    function getNom_event(){
        return $this->Nom_event;
    }
    function getLieu(){
        return $this->Lieu;
    }
    function getDateD(){
        return $this->DateD;
    }
    function getDateF(){
        return $this->DateF;
    }
     function getNom_organisateur(){
            return $this->Nom_organisateur;
    }
    function getDescription(){
        return $this->Description;
    }
    function getAffiche(){
        return $this->Affiche;
}
     function getTheme(){
         return $this->Theme;
    }
    function getId_event(){
        return $this->Id_event;
    }


    //SETTERS
    
    
}


class eventtt {
    
    private $Nom_event;
    private $Lieu;
    private $DateD;
    private $DateF;
    private $Nom_organisateur;
     private $Id_event;

   public function __construct($Nom_event,$Lieu,$DateD,$DateF,$Nom_organisateur,$Id_event){
       
        
        $this->Nom_event=$Nom_event;
        $this->Lieu=$Lieu;
        $this->DateD=$DateD;
        $this->DateF=$DateF;
        $this->Nom_organisateur=$Nom_organisateur;
    
 
        $this->Id_event=$Id_event;
    }

    //GETTERS
    
    function getNom_event(){
        return $this->Nom_event;
    }
    function getLieu(){
        return $this->Lieu;
    }
    function getDateD(){
        return $this->DateD;
    }
    function getDateF(){
        return $this->DateF;
    }
     function getNom_organisateur(){
            return $this->Nom_organisateur;
    }
 
 
    function getId_event(){
        return $this->Id_event;
    }


    //SETTERS
    
    
}






?>