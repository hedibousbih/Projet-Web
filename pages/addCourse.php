<?php

include_once('../../Controller/CourseC.php');
include_once('../../Model/Course.php');
include('header.php');



$courseC = new CourseC();

if (isset($_POST['submit'])) {

  if($_POST["name"]=="")
  {
    $error.="Please Enter Course Name !";
  }else if($_POST["image"]=="")
  {
    $error.="Please Enter Image Name !";
  } else if($_POST["category"]=="")
  {
    $error.="Please Enter Course Category !";
  }else if($_POST["type"]=="")
  {
    $error.="Please Enter Course Type !";
  }
  else if($_POST["tname"]=="")
  {
    $error.="Please Enter Teacher Name !";
  }
  else if($_POST["tpic"]=="")
  {
    $error.="Please Enter Teacher Picture !";
  } else
  {
    $courseC = new CourseC();
    // add
    if($_POST["type"]=="Free")
    {
      $course = new Course($_POST["name"],$_POST["image"],$_POST["category"],$_POST['tname'],$_POST['tpic'],1);
      $courseC->ajouterCourse($course);
      header("Location: courses.php");

    }else
    {
      $course = new Course($_POST["name"],$_POST["image"],$_POST["category"],$_POST['tname'],$_POST['tpic'],0);
      $courseC->ajouterCourse($course);
      header("Location: courses.php");
    }
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
                <h3 class="card-title">Add Course</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form method="POST" action="addCourse.php">
                <div class="card-body">
                  <div><p class="text-danger"><?php echo $error; ?></p></div>
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Course Name">
                  </div>
                  <div class="form-group">
                    <label for="image">Picture</label>
                    <input type="text" class="form-control" id="image" name="image" placeholder="Image Name">
                  </div>
                  <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" name="category" id="category" placeholder="Enter Course Category">
                    </div>
                    <div class="form-group">
                    <label for="category">Teacher Name</label>
                    <input type="text" class="form-control" name="tname" id="tname" placeholder="Enter Teacher Name">
                    </div>
                    <div class="form-group">
                    <label for="category">Teacher Picture</label>
                    <input type="text" class="form-control" name="tpic" id="tpic" placeholder="Enter Teacher Picture Name">
                    </div>

                    <div class="form-group">
                    <label for="category">Type</label>
                    <input type="text" class="form-control" name="type" id="type" placeholder="Free / Paid">
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




<?php
  include('footer.php')



?>
