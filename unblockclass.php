<?php
	include '../Controller/classesC.php';
	$classesC=new classesC();
	$classesC->unblockclasses($_GET["idclass"]);
	 header('Location:Myclassesadmin.php');
?>