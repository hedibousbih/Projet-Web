<?php
    include_once '../Model/blog.php';
    include_once '../Controller/blogC.php';

    $error = "";

    // create article
    $article = null;

    // create an instance of the controller
    $articleC = new articleC();
    if (
        isset($_POST["titre"]) &&
		isset($_POST["contenu"]) 
      //  isset($_POST["photo"]) &&
		//isset($_POST["datedecreationA"])
    ) {
        if (
            !empty($_POST["titre"]) && 
			!empty($_POST['contenu']) 
          //  !empty($_POST["photo"]) && 
		//!empty($_POST["datedecreationA"]) 
        ) {
            $article = new article(
                $_POST['titre'],
				$_POST['contenu'],
                $_POST['photo'], 
			$_POST['datedecreation']=date('Y/m/d H:i:s')
            );
            $articleC->ajouterarticle($article);
          //header('Location:ajouterarticles.php');
        }
        else
            $error = "Missing information";
    }

    
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../partie admin/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:wght@700&family=Russo+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../Blog/a.css">
<link rel="stylesheet" href="admin.css">
<script src="https://cdn.tiny.cloud/1/sh7dhq6t6qdow3w1m1zvjeewvsx7hboum4t3weo26adjt4wf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<title>L'Admin</title>
</head>
<body>
<script src="../Blog/controle.js">

</script>




	<!-- SIDEBAR -->
	<section id="sidebar">
	
		<ul class="side-menu top">
                <li>
                    <a href="../partie admin/admin.html">
                        <i class='bx bxs-dashboard' ></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">les analyses</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Professeurs</span>
				</a>
			</li>
			<li class="active">
				<a href="../partie admin/bloguser.html">
					<i class='bx bxs-group' ></i>
					<span class="text">Blog</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Paramètres</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav class="navbar">
			
			<div class = "container">
			  <img src="../Blog/images/logo.png" alt="logo de Thalos" class="logo">
			  <div class = "navbar-nav">
				<a href = "">home</a>
				<a href = "">Cours</a>
				<a href = "">blog</a>
				<a href = "">about</a>
			  </div>
			</div>
		
		<a href="#" class="notification">
			<i class='bx bxs-bell' ></i>
			<span class="num">2</span>
		</a>
		<a href="#" class="profile">
			<img src="me.jpg">
		</a>
	</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Blog</a>
						</li>
					</ul>
				</div>
				
			</div>

			<ul>
      <form method="post" onsubmit="return verif()">
    <div class="">
        <div class="title">
            <div class="md-form amber-textarea active-amber-textarea-2">
                <i class="fas fa-pencil-alt prefix"></i>
                <textarea class="md-textarea form-control" rows="3" style="margin: 0px; width: 308px; height: 74px;" name="titre" id="text"></textarea>
                <label for="form24">Title </label>
              </div>
              <br /><span id="nameErrMsg" class="error"></span> <br />
        </div>
        <div class="title">
            <div class="md-form amber-textarea active-amber-textarea-2">
                <i class="fas fa-pencil-alt prefix"></i>
                <textarea  class="md-textarea form-control" rows="3" style="margin: 0px; width: 788px; height: 408px;" name="contenu" id="text"></textarea>
                <label for="form24">Article </label>
                <br /><span id="nameErrMsg" color="red"></span> <br />
				<script src="date.js"></script>
				
              </div>
        </div>
    </div>

    <div class="">
        <input  class="button-81" type="submit">
        <input type="text" accept="htt" id="photo" name="photo" >
        <label for="photo" class="button-81">URL image</label>
    </div>
  </form>
				
		</ul>


			
		</main>
	</section>
	<script src="script.js"></script>
	<script>
    tinymce.init({
      selector: '#text',
      plugins: 'code ss',
      toolbar: 'code ss',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Hedi',
    });
  </script>
	
</body>
</html>