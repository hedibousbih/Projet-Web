<?php
	include '../Controller/classesC.php';
	$classesC=new classesC();
	$classesC->blockclasses($_GET["idclass"]);
	 header('Location:Myclassesadmin.php');
?>