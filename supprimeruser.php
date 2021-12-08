<?php
	include '../Controller/userC.php';
	$userC=new userC();
	$userC->supprimeruser($_GET["username"]);
	header('Location:admin.php');
   
?>