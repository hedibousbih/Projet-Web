<? php
session_start();
if(isset ($_POST['valider']))
{
if (!empty($_POST['pseudo']) AND !empty($_POST['mdp'] ))
{
$pseudo_par_defaut= 'admin';
$mdp_par_defaut = 'admin1234';

$pseudo_saisi = htmlspecialchars ($_POST['pseudo']);
$mdp_saisi = htmlspecialchars ($_POST['mdp']);

if($pseudo_saisi ==$pseudo_par_defaut  AND $mdp_saisi== $mdp_par_defaut){
$SESSION['mdp']= $mdp_saisi;
header('Location : index.html' )
}else{
echo 'Votre mot de passe ou pseudo est incorrect' ;
}
else{
    echo 'Veuiller completer tous les champs ...';
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Espace de connexion admin</title>
<meta charset='utf-8'>
</head>
<body>
<form method='P0ST' action="" align=" center">
<input type='text' name="pseudo" autocomp lete="off">
<br>
<input type='password' name='mdp'>
<br><br>
<input type='submit' name='valider'>
</form>
</body>
</html>
