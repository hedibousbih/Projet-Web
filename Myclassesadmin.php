<?php
include '../Controller/ClassesC.php';
$classesC = new classesC();
$listeclasses = $classesC->afficherclasses();
?>
<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Start Now">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Myclasses</title>
  <link rel="stylesheet" href="../nicepage.css" media="screen">
  <link rel="stylesheet" href="../Myclasses.css" media="screen">
  <meta name="generator" content="Nicepage 3.30.2, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">




  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Myclasses">
  <meta property="og:type" content="website">
</head>

<body class="u-body">
  <header class="u-border-1 u-border-grey-75 u-clearfix u-gradient u-header u-sticky u-sticky-9c0f u-header" id="sec-a36f">
    <div class="u-clearfix u-sheet u-valign-top u-sheet-1">
      <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="612" data-image-height="792">
        <img src="../pics/talos.png" class="u-logo-image u-logo-image-1">
      </a>
      <nav class=" u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="XS" data-position="">
        <div class="menu-collapse u-custom-font u-font-courier-new" style="font-size: 1rem; letter-spacing: 0px; text-transform: uppercase;">
          <a class="u-button-style u-custom-active-color u-custom-border u-custom-border-color u-custom-border-radius u-custom-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="color: rgb(17, 17, 17) !important;">
            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 612 612">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-77e1"></use>
            </svg>
            <svg class="u-svg-content" viewBox="0 0 612 612" x="0px" y="0px" id="svg-77e1" style="enable-background:new 0 0 612 612;">
              <g>
                <g id="menu">
                  <g>
                    <path d="M0,95.625v38.25h612v-38.25H0z M0,325.125h612v-38.25H0V325.125z M0,516.375h612v-38.25H0V516.375z"></path>
                  </g>
                </g>
              </g>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-custom-font u-font-courier-new u-nav u-spacing-10 u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-active-custom-color-1 u-button-style u-custom-color-1 u-hover-custom-color-2 u-nav-link u-radius-50 u-text-active-white u-text-grey-90 u-text-hover-white" href="Home.html" style="padding: 5px 10px;">Home</a>
            </li>
            <li class="u-nav-item"><a class="u-active-custom-color-1 u-button-style u-custom-color-1 u-hover-custom-color-2 u-nav-link u-radius-50 u-text-active-white u-text-grey-90 u-text-hover-white" href="Classrooms.html" style="padding: 5px 10px;">Classrooms</a>
            </li>
            <li class="u-nav-item"><a class="u-active-custom-color-1 u-button-style u-custom-color-1 u-hover-custom-color-2 u-nav-link u-radius-50 u-text-active-white u-text-grey-90 u-text-hover-white" href="My-account.html" style="padding: 5px 10px;">My account</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html" style="padding: 5px 10px;">Home</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Classrooms.html" style="padding: 5px 10px;">Classrooms</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="My-account.html" style="padding: 5px 10px;">My account</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    </div>
  </header>
  <section class="u-align-center u-clearfix u-section-1" id="sec-5bb1">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-expanded-width u-table u-table-responsive u-table-1">
        <table class="u-table-entity u-table-entity-1">
          <colgroup>
            <col width="14.3%">
            <col width="14.3%">
            <col width="14.3%">
            <col width="22.8%">
            <col width="20.4%">
            <col width="7%">
            <col width="6.8%">
          </colgroup>
          <thead class="u-black u-custom-font u-font-courier-new u-table-header u-table-header-1">
            <tr style="height: 21px;">
              <th class="u-custom-color-1 u-table-cell u-table-cell-1">Class Name</th>
              <th class="u-custom-color-2 u-table-cell u-table-cell-2">Level required</th>
              <th class="u-palette-1-base u-table-cell u-table-cell-3">Subject</th>
              <th class="u-custom-color-2 u-table-cell u-table-cell-4">Date</th>
              <th class="u-custom-color-1 u-table-cell u-table-cell-5">Duration</th>
              <th class="u-grey-40 u-table-cell u-table-cell-6">Edit</th>
              <th class="u-grey-40 u-table-cell u-table-cell-7">Delete</th> 
              <th class="u-custom-color-2 u-table-cell u-table-cell-4">state</th>
              <th class="u-custom-color-1 u-table-cell u-table-cell-5">block</th>
            </tr>
          </thead>
          <tbody class="u-align-center u-custom-font u-font-courier-new u-table-body">
            <?php
            foreach ($listeclasses as $classes) {
            ?>
              <tr style="height: 75px;">
                <td class="u-border-1 u-border-grey-30 u-table-cell"> <?php echo $classes['nomclass']; ?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"> <?php echo $classes['niveau']; ?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $classes['matiere']; ?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"> <?php echo $classes['datedebut']; ?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $classes['duree']; ?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">
                      <form action="Editclass.php" method="post">
                        <input type="submit" value="Modifier">
                        <input type="hidden" value=<?php echo $classes['idclass']; ?> name="idclass">
                      </form>
                </td>
                
                <td class="u-border-1 u-border-grey-30 u-table-cell"><a href="supprimerclasses.php?idclass=<?php echo $classes['idclass']; ?>">Supprimer</a></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"> <?php if($classes['etat'] == 0){?> Working <?php }else if($classes['etat'] == 1){?> blocked <?php } ?></td>
               <td class="u-border-1 u-border-grey-30 u-table-cell"> 
               <?php if($classes['etat'] == 0){?>
                <button> <a href="blockclass.php?idclass=<?php echo $classes['idclass'];?>">Block</a> </button>

                  <?php }else if($classes['etat'] == 1){?><button> <a href="unblockclass.php?idclass=<?php echo $classes['idclass']; ?>">Unblock </a><?php } ?></button>
               </td>
              </tr>

            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>



  <footer class="u-clearfix u-footer u-grey-80" id="sec-623b">
    <div class="u-clearfix u-sheet u-sheet-1">
      <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="612" data-image-height="792">
        <img src="../pics/talos.png" class="u-logo-image u-logo-image-1">
      </a>
      <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
        <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3e42"></use>
            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-3e42">
              <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
              <path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path>
            </svg></span>
        </a>
        <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7c73"></use>
            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-7c73">
              <circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle>
              <path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path>
            </svg></span>
        </a>
        <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-28c3"></use>
            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-28c3">
              <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
              <path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path>
              <path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path>
              <path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path>
            </svg></span>
        </a>
        <a class="u-social-url" title="linkedin" target="_blank" href=""><span class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5557"></use>
            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-5557">
              <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
              <path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path>
            </svg></span>
        </a>
      </div>
      <div class="u-border-1 u-border-white u-expanded-width u-line u-line-horizontal u-opacity u-opacity-50 u-line-1"></div>
      <p class="u-align-center u-text u-text-1">Best Web site for online free learning</p>
    </div>
  </footer>

</body>

</html>