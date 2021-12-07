<?php
 session_start();
	include_once '../Controller/blogC.php';
	$articleC=new articleC();
	$listearticles=$articleC->afficherarticles();
    ?> 


<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thalos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:wght@700&family=Russo+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
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
      <div class = "banner">
        <div class = "container">
          <h1 class = "banner-title">
            <span>Blog</span>
          </h1>
          <p>everything that you want to know about Technologie and science </p>
          <form  action="../Views/recherche.php" method="GET">
            <input type = "text" class = "search-input" placeholder="Quesque vous cherchez ?.."  name="search">
            <button type = "submit" class = "search-btn"  value="search">
              <i class = "fas fa-search"></i>
            </button>
          </form>
        </div>
      </div>
    </header>
    <!-- end of header -->
    
    <!-- design -->
    <section class = "design" id = "design">
      <div class = "container">
        <div class = "title">
          <h2>les Themes les plus recherchés</h2>
          <p>les Themes les plus recherches aux monde dans notre blog culturelle et educatif </p>
        </div>

        <div class = "design-content">
          <!-- item -->
          <div class = "design-item">
            <div class = "design-img">
              <img src = "images/space.jpg" alt = "">
              <span><i class = "far fa-heart"></i> 9999+</span>
              <span></span>
            </div>
            <div class = "design-title">
              <a href = "#">L'espace et l'Univers</a>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "design-item">
            <div class = "design-img">
              <img src = "images/science.png" alt = "">
              <span><i class = "far fa-heart"></i> 46</span>
              <span></span>
            </div>
            <div class = "design-title">
              <a href = "#">la sciences</a>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "design-item">
            <div class = "design-img">
              <img src = "images/tech.jpg" alt = "">
              <span><i class = "far fa-heart"></i> 1893</span>
              <span></span>
            </div>
            <div class = "design-title">
              <a href = "#">La technologie</a>
            </div>
          </div>
          <!-- end of item -->
         
        </div>
      </div>
    </section>
    <!-- end of design -->


    <!-- blog -->
    <section class = "blog" id = "blog">
      <div class = "container">
        <div class = "title">
          <h2>Blog</h2>
          <p>****************</p>
        </div>
      
        <div class = "blog-content">
        <?php
				foreach($listearticles as $article){
			?>
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-img">
              <img src = "<?php echo $article['photo']; ?>" alt = "">
              <span><i class="far fa-heart"></i> <?php echo $article['likes']; ?></span>

              
            </div>
            <div class = "blog-text">
              <span><?php echo $article['datedecreation']; ?></span>
              <h2><?php echo $article['titre']; ?></h2>
              <?php $h = $article['titre'];
                    echo "<button><a href='../Views/LikeB.php?titre=$h'>Like</a></button>";
                   ?>
              <form method="POST" action="readmore.php" class="emchi1">
             <button style="font-family: var(--Roboto); font-size: 1.1rem;  text-decoration: none;color: var(--dark);display: inline-block;   background :rgb(33, 152, 207);   color: #fff;padding: 0.55rem 1.2rem;transition: all 0.5s ease; " onMouseOver="background: var(--exDark);">read more </button>   
              <input type="hidden" value=<?PHP echo $article['titre']; ?> name="titre">
              </form>
            </div>
          </div>
          <!-- end of item -->
          <?php
				}
			?>
          
        </div>
      </div>
    </section>
    <!-- end of blog -->

    <!-- about -->
    <section class = "about" id = "about">
      <div class = "container">
        <div class = "about-content">
          <div>
            <img src = "images/about-bg.jpg" alt = "">
          </div>
          <div class = "about-text">
            <div class = "title">
              <h2>rejoignez nous!</h2>
              <p>Vous avez une bonne competence en ecrit et vous etes douee par la technologie,astroglogie... !!</p>
            </div>
            <p>zadjoaofanofanofzaofoaznfoanzofnzaofoafoanfoajnzjfojnazof <b> vous pouvez nous rejoindre et ecrivez votre propre arcticle<a href="#">(inscrire)</a></b></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam corrupti natus, eos quia recusandae voluptatem veniam modi officiis minima provident rem sint porro fuga quos tempora ea suscipit vero velit sed laudantium eaque necessitatibus maxime!</p>
          </div>
        </div>
      </div>
    </section>
    <!-- end of about -->

    <!-- footer -->
    <footer>
      <div class = "social-links">
        <a href = "#"><i class = "fab fa-facebook-f"></i></a>
        <a href = "#"><i class = "fab fa-twitter"></i></a>
        <a href = "#"><i class = "fab fa-instagram"></i></a>
        <a href = "#"><i class = "fab fa-pinterest"></i></a>
      </div>
      <span><b>Thalos</b> all Copyrights©2021</span>
    </footer>
    <!-- end of footer -->
    
    
  </body>
</html>