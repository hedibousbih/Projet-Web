
<?php 
include_once '../config.php';

$db=config::getConnexion();
$sql="SELECT * FROM event where Id_event=?";
$recipesStatement = $db->prepare($sql);
$recipesStatement->execute([$_GET['Id_event']]);
$prod=$recipesStatement->fetchall();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./../styleCSS/index.css">
    <title>Ajout</title>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EduQuiz</title>
    <link rel="icon" href="./../imagez/logo.talos.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="../css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="../css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="../css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="../css/style.css">
      <!-- style CSS -->
      <link rel="stylesheet" href="../css/style2.css">
</head>

<body>

    <!--::header part start::-->
    <header class="main_menu single_page_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a style="width: 135px;" class="navbar-brand logo_1" href="index.html"> <img
                                src="../img/EduQuizWhite.png" alt="logo" width ="100" height="100"> </a>
                        <a style="width: 135px;" class="navbar-brand logo_2" href="index.html"> <img
                                src="../img/EduQuiz.png" alt="logo" width ="100" height="100"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item ">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Courses</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Events
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="cource.php">Add Event</a>
                                        <a class="dropdown-item" href="AfficherListeAdherents.php">event profile</a>
                                        <a class="dropdown-item" href="accueil.php">home event</a>
                                    </div>
                                </li>
                                <!--
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li>
                                -->

                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="#">Register now</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
    <!-- Header part end-->
</head>

<body>
    <div class="container">
        <h1 style="text-align: center;">Modifier EVENT</h1>
<form name="frm"  method="post" action="modd.php" enctype="multipart/form-data" >
        <center><legend><h2>Ajouter Stock</h2></legend></center>
        <table id="example1" class="table table-striped">
         
         <?php
foreach ($prod as $res) {


?>
            
            </th>

          </tr>
          <tr>
            <th>Nom event</th> 
  <th><input type="text" name="nom_ev"  value="<?php echo $res['Nom_event'] ?>" />
    <input type="hidden" name="id" value="<?php echo $res['Id_event'] ?>"/>
            <th>
   
       </th>
   
          </tr>
          <tr>
            <th> lieu</th>
            <th><input type="text" name="lieu"  value="<?php echo $res['Lieu'] ?>"  />
          
             
          </tr>
          <tr>
          <th> date debt</th>
          <th><input type="date" name="datdeb" value="<?php echo $res['DateD'] ?>" />
          </th>

        </tr>
        <th>date fin</th>
          <th><input type="date" name="datefin" value="<?php echo $res['DateF'] ?>"  /></th>
        </tr>
          <th>nom organisateurs</th>
          <th><input type="text" name="nom_org" value="<?php echo $res['Nom_organisateur'] ?>"/></th>
        </tr>
          
         <?php } ?>
        </tr>
        </table>
        <br>
        <center>
        <td><button type="submit" name="Ajouter" value="Ajouter" class="btn btn-danger">Ajouter</button></td>
      </center>
    
      </form>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
</body>

</html>

?>
