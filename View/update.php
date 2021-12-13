<?php
require_once '../model/eventM.php';
require '../Controllers/eventC.php';
$eventC= new event();
$V = new event( $_POST['Id_event']);
        $eventC->Modifierevent($V);
        header('Location:Afficherevent.php');
?>
