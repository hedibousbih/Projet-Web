<?php
	include '../Controller/blogC.php';
	$articleC=new articleC();
	$articleC->supprimerarticle($_GET["titre"]);
	header('Location:affichageadmin.php');
?>