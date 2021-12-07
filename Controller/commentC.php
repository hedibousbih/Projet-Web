<?php
include '../config2.php';
include_once '../Model/comment.php';

class commentC {
    function ajouterComment($comment){
        $sql="INSERT INTO commentaire (article_title,user_id,name,comment,date) VALUES (:a, :u,:n, :c,:d)";
        $db = config2::getConnexion();
        try{
            $query = $db->prepare($sql);
            $query->execute([
                'a' => $comment->getArticleid(),
                'u' => $comment->getUserid(),
                'n' => $comment->getName(),
                'c' => $comment->gettext(),
                'd' => $comment->getDatec(),
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }
    function recuperercomment($id)
    {
        $sql="SELECT * FROM commentaire where id = $id";
        $db = config2::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $comment=$query->fetch();
            return $comment;
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
    function affichercomments($id){
        $sql="SELECT * FROM commentaire where id = $id";
        $db = config2::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
    function afficher(){
        $sql="SELECT * FROM commentaire where id";
        $db = config2::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
    function modifiercomment($comment, $id){
        try {
            
            $db = config2::getConnexion();
            $t = $comment->gettext();
            $sql="UPDATE commentaire SET 
            comment= '" . $t . "'
        WHERE post_id= '" . $id . "'";
            $query = $db->prepare($sql);
            $query->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    function supprimerC($id){
        $sql="DELETE FROM commentaire WHERE id=:id";
        $db = config2::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id', $id);
        try{
            $req->execute();
        }
        catch(Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

}
?>