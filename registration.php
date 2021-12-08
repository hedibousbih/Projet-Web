<?php
    include_once '../Model/user.php';
    include_once '../Controller/userC.php';

    $error = "";

    // create adherent
    $user = null;

    // create an instance of the controller
    $userC = new userC();
    if (
        isset($_POST["username"]) &&
		isset($_POST["userlastname"]) &&		
        isset($_POST["email"]) &&
		isset($_POST["pwd"]) 

    ) {
        if (
            !empty($_POST["username"]) && 
			!empty($_POST['userlastname']) &&
            !empty($_POST["email"]) && 
			!empty($_POST["pwd"]) 
            
        ) {
            $user = new user(
                $_POST['username'],
				$_POST['userlastname'],
                $_POST['email'], 
				$_POST['pwd'],
        $_POST['status'],
        $_POST['usertype1'],
        $_POST['metier']
            );
            $userC->ajouteruser($user);
            // header('Location:afficherListeAdherents.php');
        }
        else
            $error = "Missing information";
    }  
?>
<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
<link rel="stylesheet" href="styling.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:wght@700&family=Russo+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="../styling.css">
<link rel="stylesheet" href="../formstyle.css">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">

<title>Talos</title>
<nav class="navbar">

  <a href="index.html"><img src="logo.png" alt="logo de Thalos" class="logo"></a>
  <div class="navbar-nav">
    <a href="">home</a>
    <a href="">Cours</a>
    <a href="">blog</a>
    <a href="">about</a>
    <a href="">Inscription</a>
   <div> <a href="#">login</a> </div>
  </div>
   
</nav>

</head>  
<body> 
  <form class="form" method="post">
  <div class="container">  
  <center> <h1> formulaire d'inscription </h1></center>
<div class="form-control">
<label><b>Nom:</b></label>   
<input type="text" name="username" id="txtUserName"  placeholder= "username" size="15" required />   
<small>Error Message</small> </div>
<div class="form-control">
<label><b>Prenom: </b></label>    
<input type="text" name="userlastname" id="txtLastName"placeholder="Lastname" size="15"required />   
<small>Error Message</small> </div>
<!--<div class="form-control">
 <label for="phoneNumber" ><b>Numéro De Téléphone : </b></label>  
<input type="text" name="phoneNumber" placeholder="Enter phone number" id="num"  required size="3"/>    
<small>Error Message</small> </div> -->

<!--<div class="form-control"></div>
<label for="adress" ><b>Adresse: </b></label> 
<textarea cols="80" rows="5" name="adress" id="ad"placeholder="Current Address"  required>  
</textarea>  
<small>Error Message</small></div> -->
 <div class="form-control">
    <label for="email"><b>Email:</b></label>  
    <input type="text" placeholder="Enter Email" id="txtEmail" name="email" required>  
    <small>Error Message</small> </div>
 <div class="form-control">
    <label for="pwd"><b>Mot De Passe :</b></label>  
    <input type="password" placeholder="Enter Password" id="txtPwd" name="pwd" required>  
    <small>Error Message</small></div>
<div class="form-control">
    <label for="conpwd"><b>Confirmation Du Mot De Passe:</b></label>  
    <input type="password" placeholder="Retype Password" id="txtConPwd" name="conPwd" required> 
    <small>Error Message</small> </div>
    <label><b>Genre :</b></label><br>  
<input type="radio" value="male" name="gender" checked required> Male 
<input type="radio" value="femelle" name="gender" required> Femelle </div>
<!-- <input type="submit" value="Enregistrer"  name="Enregistrer" class="registerbtn" id='register'>  -->
  <input type="submit" value="Enregistrer" name="Enregistrer" id="button" class="registerbtn" />
</form>  
<footer>
  <div class = "social-links">
    <a href = "#"><i class = "fab fa-facebook-f"></i></a>
    <a href = "#"><i class = "fab fa-twitter"></i></a>
    <a href = "#"><i class = "fab fa-instagram"></i></a>
    <a href = "#"><i class = "fab fa-pinterest"></i></a>
  </div>
  <span><b>Thalos</b> all Copyrights©2021</span>
</footer>
<!-- <script src="../registration2.js"></script> -->
</form>
</body>  
</html>