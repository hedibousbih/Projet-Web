<?php
	include '../Controller/classesC.php';
	$classesC=new classesC();
	$classesC->supprimerclasses($_GET["idclass"]/* ,$_GET["idprof"] */);
	 header('Location:Myclassesadmin.php');
?>