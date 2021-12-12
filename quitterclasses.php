<?php
	include '../Controller/classesC.php';
	$classesC=new classesC();
	$classesC->quitterclasses($_GET["idclass"]);
	//   header('Location:Myclasses.php');
?>