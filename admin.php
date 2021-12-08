<?php
    include '../Controller/userC.php';
	session_start() ;
	$userC=new userC();
	$listeuser=$userC->afficheruser(); 
     
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../style.css">
    <style>  .btn{
	background-color: red;
	border: none;
	color: white;
	padding: 5px 5px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 9px;
	margin: 4px 2px;
	cursor: pointer;
	border-radius: 20px;
}
.green{
	background-color: #199319;
}
.red{
	background-color: red;
}
.orange{
	background-color: coral;
}
.jaune{
	background-color: fuchsia;
}
.greenpastel{
	background-color: lightseagreen;
}

   </style>
	<title>L'Admin</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Admin</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
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
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Paramètres</span>
				</a>
			</li>
			<li>
				<a href="deco.php" class="logout">
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
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
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
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3> 10 </h3> 
						<p>Nouveaux inscrits</p>
						
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Eleves</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>43</h3>
						<p>Professeurs</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Derniers inscrits</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<!-- <th>Nom et Prenom</th>
								<th>Date D'inscription</th>
								<th>Statut</th> -->
							</tr>
						</thead>
						<tbody>
                        <tr>
				<th>Prenom</th>
				<th>Nom</th>
				<th>Email</th>
				<th>Mot De Passe</th>
				<th>Usertype</th>
				<th>Modifier</th>
				<th>Statut</th>
			    <th>Modifier</th>
				<!-- <th>Modifier</th> -->
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listeuser as $user){
			?>
			<tr>
				<td><?php echo $user['username']; ?></td>
				<td><?php echo $user['userlastname']; ?></td>
				<td><?php echo $user['email']; ?></td>
				<td><?php echo $user['pwd']; ?></td>
			
					<!-- </td>
				
				</td>  -->
       <td>   <?php 
                        // Usage of if-else statement to translate the 
                        // tinyint status value into some common terms
                        // 0-Inactive
                        // 1-Active
				
                        if($user['usertype1']=="1") 
                            echo "admin";
                        else 
                            echo "user";
                    ?>                       </td>
	        <td> 
                   
			<?php 
                    if($user['usertype1']=="1") 
  
                        // if a course is active i.e. status is 1 
                        // the toggle button must be able to deactivate 
                        // we echo the hyperlink to the page "deactivate.php"
                        // in order to make it look like a button
                        // we use the appropriate css
                        // red-deactivate
                        // green- activate
                        echo 
"<a href=desactivate1.php?username=".$user['username']." class='btn greenpastel'>user</a>";
                    else 
                        echo 
"<a href=act.php?username=".$user['username']." class='btn jaune'>Admin</a>";
                    ?>
        
		   </td>
	   
	   <td><?php 
                        // Usage of if-else statement to translate the 
                        // tinyint status value into some common terms
                        // 0-Inactive
                        // 1-Active
				
                        if($user['status']=="1") 
                            echo "Active";
                        else 
                            echo "Inactive";
                    ?>                          
                </td>
				<td>
                    <?php 
                    if($user['status']=="1") 
  
                        // if a course is active i.e. status is 1 
                        // the toggle button must be able to deactivate 
                        // we echo the hyperlink to the page "deactivate.php"
                        // in order to make it look like a button
                        // we use the appropriate css
                        // red-deactivate
                        // green- activate
                        echo 
"<a href=desactivate.php?username=".$user['username']." class='btn orange'>Desactivate</a>";
                    else 
                        echo 
"<a href=activate.php?username=".$user['username']." class='btn green'>Activate</a>";
                    ?>
        
					</td>
				<td>
					<a href="supprimeruser.php?username=<?php echo $user['username']; ?> " class='btn red'>supprimer</a>
				</td>
			</tr>
            <?php
				}
			?>
						</tbody>
					</table>
				</div>
		</main>
	</section>
	<script src="script.js"></script>
	
</body>
</html>