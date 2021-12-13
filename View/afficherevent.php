
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>talos</title>
    <link rel="icon" href="../img/2.png">
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
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="../table-09/css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu single_page_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a style="width: 135px;" class="navbar-brand logo_1" href="../index.html"> <img
                                src="./../images/logo.talos.png" alt="logo" width ="100" height="100"> </a>
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item ">
                                    <a class="nav-link" href="../index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../about.html">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../cource.html">Courses</a>
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

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2> Events Profil</h2>
                            <p>Home<span>/</span>Events Profil</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                 
                        <h2> Your Events</h2>
                    </div>
                </div>
            </div>
           
            
 <?php 
  require_once "./../config.php";
    require_once "./../controllers/eventC.php";
    $eventC = new eventC();
    $listeevents=$eventC->afficherevent();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Title</title>
</head>

<body>

    <div class="container pos">
        <br><br>
        <a href="./ajouterevent.php" class="btn btn-primary">add event</a>
        <br><br>
        
        <table class="table">
            <tr>
                
                <th>Nom_event</th>
                <th>Lieu</th>
                <th>DateD</th>
                <th>DateF</th>
                <th>Nom_organisateur</th>
				<th>Description</th>
                <th>Affiche</th>
                <th>Theme</th>
                <th>Id_event</th>
                   <th>Nombre de persn</th>
                <th>delete</th>
                <th>update</th>
            </tr>

            <?php foreach($listeevents as $event) { ?>
            <tr>
                <td>
                    <?php echo $event['Nom_event'] ?>
                </td>
                <td>
                    <?php echo $event['Lieu'] ?>
                </td>
                <td>
                    <?php echo $event['DateD'] ?>
                </td>
                <td>
                    <?php echo $event['DateF'] ?>
                </td>
                <td>
                    <?php echo $event['Nom_organisateur'] ?>
                </td>
                <td>
                    <?php echo $event['Description'] ?>
                </td>
               <td><?php echo"<img src='./uploads/".$event['image']."'>" ?>
      <style>
            img{
            width: 90px;
                        height: 90px;         
            }
            
            </style>
</td>
                <td>
                    <?php echo $event['Theme'] ?>
                </td>
                <td>
                    <?php echo $event['Id_event'] ?>
                </td>
                <td>
                    <?php echo $event['nbr'] ?>
                </td>
                <td>
                    <form action="./supprimerevent.php" method="POST">
                        <input class="btn btn-primary" type="submit" value="delete">
                        <input type="hidden" name="Id_event" value="<?=$event['Id_event']?>">
                    </form>
                </td>
                <td>
                    <form action="./modifierevent.php" method="GET">
                        <input class="btn btn-primary" type="submit" value="update">
                        <input type="hidden" name="Id_event" value="<?=$event['Id_event']?>">
                    </form>
                </td>
            </tr>
            <?php }?>
        </table>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

