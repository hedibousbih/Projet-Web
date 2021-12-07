<?php
	include '../Controller/blogC.php';
	$articleC=new articleC();
	$listearticles=$articleC->afficherarticles();
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
<link rel="stylesheet" href="admin.css">

	<title>L'Admin</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
	
		<ul class="side-menu top">
                <li>
                    <a href="admin.html">
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
				<a href="#">
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

            <table class="styled-table">
			<tr>
				<th>TITRE</th>
				<th>CONTENU</th>
				<th>DATE ARTICLE</th>
				<th>PHOTO</th>
				<th>MODIFIER</th>
				<th>SUPPRIMER</th>
			</tr>
			<?php
				foreach($listearticles as $article){
			?>
			<tr>
				<td><?php echo $article['titre']; ?></td>
				<td><?php echo $article['contenu']; ?></td>
				<th><?php echo $article['datedecreation']; ?></th>
				<td><?php echo $article['photo']; ?></td>
				<td>
					<form method="POST" action="modifierarticle.php">
						<input class="button-81" type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $article['titre']; ?> name="titre">
					</form>
				</td>
				<td>
					<form method="POST" action="supprimerarticle.php?titre=<?php echo $article['titre']; ?>">
					<button type="submit" class="button-8" >Supprimer</button>
					</form>
				</td>
			</tr>
			<?php
				}
			?>
		</table>


			
		</main>
	</section>
	<script src="script.js"></script>
	
</body>
</html>