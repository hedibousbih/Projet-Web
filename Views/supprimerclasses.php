<?php
	include '../Controller/classesC.php';
	$classesC=new classesC();
	$classesC->supprimerclasses($_GET["idprof"]/* ,$_GET["idprof"] */);
	 header('Location:Myclasses.php');
?>