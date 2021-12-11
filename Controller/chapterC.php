<?php
    include('../../config.php');
    include_once('../../Model/chapter.php');

    class chapterC{
        function afficherchapter()
        {
            $sql = "SELECT * FROM chapter";
            $db = config::getConnexion();
            try{
				$list = $db->query($sql);
				return $list;
			}
			catch(Exception $e){
				die('Error:'. $e->getMessage());
			}
        }

		

        function supprimerchapter($id)
        {
            $sql="DELETE FROM chapter WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Error:'. $e->getMessage());
			}
        }

        function ajouterchapter($chapter)
        {
			$sql="INSERT INTO chapter (nom, image, category) 
			VALUES (:nom,:image,:category)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom' => $chapter->getNom(),
					'image' => $chapter->getImage(),
					'category' => $chapter->getCategory(),
					
				]);			
        }
        catch (Exception $e){
            echo 'Error: '.$e->getMessage();
        }	
        }

        function getchapter($id){
			$sql="SELECT * from chapter where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$adherent=$query->fetch();
				return $adherent;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

        function updatechapter($chapter, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					"UPDATE chapter SET 
						nom= :nom, 
						image= :image, 
						category= :category, 
					
					WHERE id=$id"
				);
				$query->execute([
					'nom' => $chapter->getNom(),
					'image' => $chapter->getImage(),
					'category' => $chapter->getCategory(),
					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
    }



?>