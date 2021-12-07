<?php
  session_start();
  include_once '../Model/blog.php';
	include_once '../Controller/blogC.php';
  include_once '../Controller/commentC.php';
  include_once '../Model/comment.php';

  $article = NULL;
  $articleC = new articleC();
  $listeArticles = $articleC->afficherArticles();
  $comment = NULL;
  $commentC = new commentC();

  $articleC = new articleC();
  if (isset($_GET['titre'])) {
    $article = $articleC->recupererArticle($_GET['titre']);
    $listeComments = $commentC->affichercomments($_GET['titre']);
}
if (!empty($_POST["comment"])){
    $comment = new comment(NULL,$_GET['titre'],$_SESSION["id"],$_SESSION["user"], $_POST['text'],date('Y/m/d H:i:s'));
    $commentC->ajouterComment($comment);
    header('refresh: 1');
  }
?>
  


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read-more</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="styleRM.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:wght@700&family=Russo+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:wght@700&family=Russo+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300&family=Open+Sans+Condensed:ital,wght@1,300&family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="comment.css">
</head>
<body>
      <!-- header -->
      <header>
        <nav class = "navbar">
          <div class = "container">
            <a href = "index.html" ><img src="images/logo.png" alt="logo de Thalos" class="logo"></a>
            <div class = "navbar-nav">
              <a href = "">  home</a>
              <a href = "">Cours</a>
              <a href = "">blog</a>
              <a href = "">about</a>
            </div>
          </div>
        </nav>
      
      </header>

      <section class = "design" id = "design">
        <div class = "container">
        <?php
			if (isset($_POST['titre'])){
				$article = $articleC->recupererarticle($_POST['titre']);
				
		?>

          <div class = "title">
            <h2><?php echo $article['titre']; ?></h2>
         
          </div>
  
          <div class = "design-content">
              <div class="elon">
           <img src="<?php echo $article['photo']; ?>" alt="">
              </div>
              <center>
           
           <div><?php echo $article['contenu'];?></div>
            
          
          </center>
           <p class="auteur">article ecrit par X <br><?php echo $article['datedecreation']; ?></p>
           
          </div>
        </div>
        <?php
		}
		?>
       <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="comments">
                    <div class="comments-details">
                        <span class="total-comments comments-sort"></span>
                      <!--  <span class="dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Sort By <span class="caret"></span></button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Top Comments</a>
                                <a href="#" class="dropdown-item">Newest First</a>
                            </div>
                        </span>-->
                    </div>
                    <div class="comment-box add-comment">
                        <span class="commenter-pic">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/2048px-User_icon_2.svg.png" class="img-fluid">
                        </span>
                        <form class="" method="POST">
                        <span class="commenter-name">
                            <input type="text" placeholder="Add a public comment" name="comment">
                            <button type="submit" class="btn btn-default">Comment</button>
                            <button type="reset" class="btn btn-default">Cancel</button>
                        </span>
                        </form>
                    </div>
                    <?php
            foreach ($listeComments as $com) {
              ?>
                          <div class="comment-box">
                              <span class="commenter-pic">
                                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/2048px-User_icon_2.svg.png" class="img-fluid">
                              </span>
                              <span class="commenter-name">
                                  <a href="#"><?php echo $com['nom']; ?></a> <span class="comment-time"></span>
                              </span>
                              <p class="comment-txt more"><?php echo $com['text']; ?></p>
                              <span><?PHP $h=$com['user_id'];$p=$_GET['titre']; if($_SESSION["id"] == $h ){ echo "<button type='submit' class='btn btn-default' style='background: #03a9f4;color: white;'><a style='color: #ffffff;text-decoration: none;' href='ModifierComment.php?id=$h&post_id=$p'>MODIFY</a></button>";}?></span>
                          </div>
                          <?php
              }
              ?>
                    
                    
                   
                </div>
            </div>
        </div>
    </div>
      </section>
      
      <footer>
        <div class = "social-links">
          <a href = "#"><i class = "fab fa-facebook-f"></i></a>
          <a href = "#"><i class = "fab fa-twitter"></i></a>
          <a href = "#"><i class = "fab fa-instagram"></i></a>
          <a href = "#"><i class = "fab fa-pinterest"></i></a>
        </div>
        <span><b>Thalos</b> all Copyrights©2021</span>
      </footer>
</body>
</html>