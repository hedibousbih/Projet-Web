<?php

include_once('../../Controller/CourseC.php');
$id = $_GET["id"];

$chapterC = new CourseC();
$chapterC->supprimerchapter($id);

header("Location:courses.php");

?>
