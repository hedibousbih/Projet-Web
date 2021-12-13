<?php 
include_once '../config.php';

include_once'../controllers/eventC.php';
include_once'../model/eventM.php';
if(!isset($_POST['id'])||!isset($_POST['nom_ev'])||!isset($_POST['lieu'])||!isset($_POST['datdeb'])||!isset($_POST['datefin'])||!isset($_POST['nom_org'])||!isset($_POST['description'])||!isset($_POST['th']))
{
	echo "erreur de ";
}


if (isset($_FILES['image']) && $_FILES['image']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['image']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $fileInfo = pathinfo($_FILES['image']['name']);
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png','jfif'];
                if (in_array($extension, $allowedExtensions))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . basename($_FILES['image']['name']));
                        echo "L'envoi a bien été effectué !.<br>"; 
                      //  echo  'uploads/' . basename($_FILES['screenshot']['name']);
                }
        }
} 
$cate=new event($_POST['nom_ev'],$_POST['lieu'],$_POST['datdeb'],$_POST['datefin'],$_POST['nom_org'],$_POST['description'],$_FILES['image']['name'],$_POST['th'],$_POST['id']);

$cat=new eventC();
$cat->Ajouter($cate);

header('location:http://localhost/web/view/afficherevent.php');

?>