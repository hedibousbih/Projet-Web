<?php 
include_once '../config.php';
include_once'../controllers/eventC.php';
$db=config::getConnexion();
$sql="SELECT * FROM event where Id_event=?";
$recipesStatement = $db->prepare($sql);
$recipesStatement->execute([$_GET['Id_event']]);
$prod=$recipesStatement->fetchall();

foreach ($prod as $res) {
	$x=$res['nbr'];
}
$s=$x+1;
$cat=new eventC();
$cat->update($s,$_GET['Id_event']);

header('location:http://localhost/web/mes-evenements.php');

?>
