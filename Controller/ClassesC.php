<?php
	include '../config.php';
	include_once '../Model/Classes.php';
	class classesC {
		function afficherclasses(){
			$sql="SELECT * FROM classes";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		 function supprimerclasses($idclass/*, $nomclass */){
			$sql="DELETE FROM classes WHERE idclass=:idclass";
			// $sql2="DROP TABLE $nomclass";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idclass', $idclass);
			try{
				$req->execute();
				// $sql2->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		} 

		function ajouterclasse($classes){
			$sql="INSERT INTO classes (idclass,idprof,nomclass,niveau,matiere,datedebut,duree) 
			VALUES (:idclass,:idprof,:nomclass,:niveau,:matiere,:datedebut,:duree)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'idclass'=> $classes->getidclass(),
					'idprof'=> $classes->getidprof(),
					'nomclass'=> $classes->getnomclass(),
					'niveau' => $classes->getniveau(),
					'matiere' => $classes->getmatiere(),
					'datedebut' => $classes->getdatedebut(),
					'duree' => $classes->getduree()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}


		
		function recupererclasses($idclass){
			$sql="SELECT * from classes where idclass=$idclass";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$classes=$query->fetch();
				return $classes;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierclasses($classes, $idclass){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE classes SET 
						nomclass= :nomclass, 
						niveau= :niveau, 
						matiere= :matiere, 
						datedebut= :datedebut, 
						duree= :duree
					WHERE idclass= :idclass'
				);
				$query->execute([
					'nomclass' => $classes->getnomclass(),
					'niveau' => $classes->getniveau(),
					'matiere' => $classes->getmatiere(),
					'datedebut' => $classes->getdatedebut(),
					'duree' => $classes->getduree(),
					'idclass' => $idclass,
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			}  catch (PDOException $e) {
				$e->getMessage();
			}
		}

		function createclasse($nomclass){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					"CREATE TABLE $nomclass(
						idetd int,
						LastName varchar(255)
					);"
				);				
				$query->execute();
			}  catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>