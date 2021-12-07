<?php
	include '../config.php';
	include_once '../Model/blog.php';
	class articleC {
		function afficherarticles(){
			$sql="SELECT * FROM article";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerarticle($titre){
			$sql="DELETE FROM article WHERE titre=:titre";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':titre', $titre);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterarticle($article){
			$sql="INSERT INTO article (titre, contenu, photo,datedecreation) VALUES (:titre,:contenu,:photo, :datedecreation)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'titre' => $article->gettitre(),
					'contenu' => $article->getcontenu(),
					'photo' => $article->getphoto(),
					'datedecreation' => $article->getdatedecreation()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererarticle($titre){
			$sql='SELECT * from article where titre= "'.$titre.'"';
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$article=$query->fetch();
				return $article;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierarticle($article, $titre){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE article SET 
						contenu= :contenu ,
						photo= :photo
					WHERE titre= :titre'
				);
				$query->execute([
					'contenu' => $article->getcontenu(),
					'photo' => $article->getphoto(),	
					'titre' => $titre
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}


		function rechercher($value){
            $db = config::getConnexion();
            $SEARCH=$db->prepare("SELECT * FROM article WHERE titre LIKE :value");
            $value="%".$value."%";
            $SEARCH->bindParam("value",$value);
            $SEARCH->execute();
            return $SEARCH;
        }

	}
?>