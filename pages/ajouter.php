<?php 
include_once '../../Model/chapter.php';
include_once '../../Controller/CourseC.php';
if(!isset($_POST['id'])||!isset($_POST['name'])||!isset($_POST['category']))
{
	echo "erreur de ";
}

$ser=new  chapter($_POST['id'],$_POST['name'],$_POST['category']);


$produitc=new CourseC();

$produitc->ajouterchapter($ser);
header('location:http://localhost/edueasy/Back/Views/pages/courses.php');




?>