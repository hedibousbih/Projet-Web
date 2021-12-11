<?php

include_once('../../Controller/CourseC.php');
include_once('../../Model/Course.php');

include('header.php');
$courseC = new CourseC();

if (isset($_POST['submit'])) {
$categorie = $_POST["category"];
  if($_POST["name"]=="")
  {
    $error.="Please Enter Chapter Name !";
  } else if(strlen($categorie)==0)
  {
    $error.="Please Enter Chapter Category !";
  }
}

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add chapter</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form method="POST" action="ajouter.php">
                <div class="card-body">
                  <div><p class="text-danger">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter chapter Name">
                    <input type="hidden" class="form-control" id="id" name="id" placeholder="Enter chapter id">
                  </div>
                  
                  <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" name="category" id="category" placeholder="Enter chapter Category">
                    <p id="error" style="color:red;"></p>
                    </div>
                
                   
                  </div>

                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" id="submit" class="btn btn-primary">Add</button>
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
<script>
  var category = document.getElementById('category');
  var submit = document.getElementById('submit');
  var error = document.getElementById('error');

  submit.addEventListener('click',(e)=>{
     
     if(category.value.length ==0){
        e.preventDefault();
        error.innerHTML = "Please Enter chapter Category !";
     }
  });
</script>



<?php
  include('footer.php')



?>
