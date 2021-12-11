<?php

include_once('../../Controller/CourseC.php');
include_once('../../Model/Course.php');


include_once '../../config.php';
$db=config::getConnexion();
$sql="SELECT * FROM chapter where id=?";
$recipesStatement = $db->prepare($sql);
$recipesStatement->execute([$_GET['id']]);
$prod=$recipesStatement->fetchall();







include('header.php');


$courseC = new CourseC();

if (isset($_POST['submit'])) {
$categorie = $_POST["category"];
  if($_POST["name"]=="")
  {
    $error.="Please Enter Cchapter Name !";
  } else if(strlen($categorie)==0)
  {
    $error.="Please Enter chapter Category !";
  }
}




?>
<link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update chapter</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form method="POST" action="modif.php">
                <div class="card-body">
                  <div><p class="text-danger"><?php echo $error; ?></p></div>
                  <div class="form-group">
                    <label for="name">Name</label>
                    <?php
foreach($prod as $pro){

?>

                                            
                    <input type="text" class="form-control" id="name" name="name" value=" <?php echo $pro['nom'] ?>">
                    <input type="hidden" class="form-control" id="id" name="id" value=" <?php echo $pro['id'] ?>">
                    
                  </div>
                  
                  <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" name="category" id="category" value=" <?php echo $pro['category'] ?>">
                    </div>

                   <?php } ?> 

                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" id="submit" class="btn btn-block btn-info btn-lg">Update</button>
                </div>
              </form>
            </div>


          </div>
          <!-- /.col -->

        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>




<?php
  include('footer.php')



?>
