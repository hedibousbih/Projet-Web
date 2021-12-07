<?php
session_start();
include "../config.php";
 $titre = $_GET['titre'];

$user_id = $_SESSION["id"];
if ($_SESSION["role"] == "user") {
    $sql = "SELECT * from article where titre='$titre'";
    $db = config::getConnexion();
    try {
            $sql="UPDATE article set likes = likes+1 where titre='$titre'";
            $query3 = $db->prepare($sql);
            $query3->execute();
            header("location:..\Blog\index.php");
        
    } catch (Exception $e) {
        echo 'Erreur: ' . $e->getMessage();
    }
}