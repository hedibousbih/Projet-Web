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
         $userC->modifieruser($user, $_POST['username']);
         //header('Location:admin.php');
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
   
</nav>
</head>  
<body> 
    
		<?php
        //echo ($_POST['username']);
			if (isset($_POST['username'])){
				$user = $userC->recupereruser($_POST['username']); 
				
		?> 

  <form action="" method="POST">
  <!-- <form class="form" method="post"> -->
  <div class="container">  
 
<div class="form-control">
<label><b>Nom:</b></label>   
<input type="text" name="username" id="txtUserName"  size="15" value="<?= $user['username']; ?>" />   
</div>
<div class="form-control">
<label><b>Prenom: </b></label>    
<input type="text" name="userlastname" id="txtLastName" size="15"  value="<?php echo $user['userlastname']; ?>"/>   

</textarea>   <div class="form-control">
    <label for="email"><b>Email:</b></label>  
    <input type="text"  id="txtEmail" name="email"  value="<?php echo $user['email']; ?>"/>  
    </div>
 <div class="form-control">
    <label for="pwd"><b>Mot De Passe :</b></label>  
    <input type="password"  id="txtPwd" name="pwd"  value="<?php echo $user['pwd']; ?>"/>  
    </div>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifierr"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
        <?php
		}
        // else
        //     echo "display problem";
		?>
        </body>
</html>