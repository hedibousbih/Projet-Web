<?php

include_once('../../Controller/CourseC.php');
$id = $_GET["id"];

$courseC = new CourseC();
$courseC->supprimerCourse($id);

header("Location: courses.php");

?>
