<?PHP

  

class eventC
{
    function afficherevent() {
        //$sql = "SELECT * FROM event WHERE Id_event=:Id_event";
        $sql = "SELECT * FROM event";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch(Exception $e){
            $e->getMessage();
        }
    }
function Modifieev($ser)
{
$sqlc= "UPDATE `event` SET  Nom_event=:nom,Lieu=:liu,DateD=:datd,DateF=:datf,Nom_organisateur=:nom_org WHERE Id_event=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
    $recipesStatement->execute([ 'nom'=>$ser->getNom_event(),
                    'liu' =>$ser->getLieu(),
                    'datd'=>$ser->getDateD(),
                     'datf'=>$ser->getDateF(),
                       'nom_org'=>$ser->getNom_organisateur(),
                       
                           'id'=>$ser->getId_event(),

                 ]);
}
 catch(Exception $e){ 
    
             die("erreur:".$e->getMessage());
}

}

function update($nb,$id)
{
$sqlc= "UPDATE `event` SET  nbr=:nb WHERE Id_event=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
    $recipesStatement->execute([ 'nb'=>$nb,
                    
                       
                           'id'=>$id,

                 ]);
}
 catch(Exception $e){ 
    
             die("erreur:".$e->getMessage());
}

}



  function Ajouter($ser){
$sql= "INSERT INTO `event` VALUES (:nom, :lieu, :datd,:datf,:nom_org,:desce,:image,:them,:id,:nbr)";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sql);
    $recipesStatement->execute([ 'nom'=>$ser->getNom_event(),
                    'lieu' =>$ser->getLieu(),
                    'datd'=>$ser->getDateD(),
                     'datf'=>$ser->getDateF(),
                       'nom_org'=>$ser->getNom_organisateur(),
                         'desce'=>$ser->getDescription(),
                           'image'=>$ser->getAffiche(),
 'them'=>$ser->getTheme(),
                           'id'=>$ser->getId_event(),
'nbr'=>0,

    ]);
 }
 catch(Exception $e){ 
    
             die("erreur:".$e->getMessage());

}

}
	
	
    /*function afficherlistevent()
    {
		$sql="SELECT * From event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }*/

    function supprimerevent($Id_event){
        $db = config::getConnexion();
        $sql = "DELETE FROM event where Id_event=:Id_event";

        try {
            $query = $db->prepare($sql);
            $query->bindValue(':Id_event',$Id_event);
            $query->execute();
        }catch(Exception $e){
            $e->getMessage();
        }
    }
  
  
   
	
   function rechercherlisteevent($Id_event)
    {
		$sql="SELECT * from event where Id_event=$Id_event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
    function somme()
    {
        $sql="SELECT SUM(DateF) AS DateF_Total FROM event ";
        $db = config::getConnexion();
        try{
        $liste= $db->query($sql);
        $row = $liste->fetch_assoc(); 
        $sum = $row['DateF_Total'];
        return $sum;
		}
        catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }
    }

    function recupererevent($id_event)
    {
		$sql="SELECT * from event where id_event=$id_event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    



    function rechercherID($recherche)
    {
        $sql="SELECT * FROM event where id_event like'%".$recherche."%' ";
        $db =config::getConnexion();
        try{
         $list=$db->query($sql);
         return $list;
        }
          catch (Exception $e)
     { die('Erreur:'.$e->getMessage());}
	}
    



    function afficher1($Rechercher="",$Id_event)
    {
        $sql="SELECT * From event where Id_event= ".$Id_event;
    	if ($Rechercher!='') {
			$sql=$sql." AND Nom_event like '%".$Rechercher."%'";
		}
		$db = config::getConnexion();
		try{
		$reserv=$db->query($sql);
		return $reserv;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function fetch_events(){
        $sql="SELECT * FROM event";
        $db=config::getConnexion();
        try{
            $query=$db->query($sql);
            return $query;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

    }

    function getOneevent($Id_event) {
        $sql="SELECT * from event where Id_event=$Id_event";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $adherent=$query->fetch();
            return $adherent;
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
    



    function geteventRows($id){
        $sql="SELECT * FROM organisteur_pannier WHERE id_event='$id'";
        $db=config::getConnexion();
        try{
            $query=$db->query($sql);
            return $query;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

}
function tri(){
        $sql="SELECT * FROM event ORDER by DateD ";
        $db=config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die("erreur:".$e->getMessage());
        }
    } 

    function recherche($search_value)
    {
        $sql="SELECT * FROM event where     Id_event like '$search_value' or Nom_event like '%$search_value%' or Lieu like '%$search_value%'   ";

        //global $db;
        $db =Config::getConnexion();

        try{
            $result=$db->query($sql);

            return $result;

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

}
  

?>