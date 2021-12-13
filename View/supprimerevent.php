

<?php
  require_once "./../config.php";
    require_once "./../controllers/eventC.php";
    $eventC = new eventC();
    $eventC->supprimerevent($_POST['Id_event']);
    header("Location: ./afficherevent.php");
?>
