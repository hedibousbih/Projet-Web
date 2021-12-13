<?php 
include_once '../config.php';

include_once'../controllers/eventC.php';
include_once'../model/eventM.php';
if(!isset($_POST['id'])||!isset($_POST['nom_ev'])||!isset($_POST['lieu'])||!isset($_POST['datdeb'])||!isset($_POST['datefin'])||!isset($_POST['nom_org']))
{
	echo "erreur de ";
}



$cate=new eventtt($_POST['nom_ev'],$_POST['lieu'],$_POST['datdeb'],$_POST['datefin'],$_POST['nom_org'],$_POST['id']);

$cat=new eventC();
$cat->Modifieev($cate);

header('location:http://localhost/web/view/afficherevent.php');

?>