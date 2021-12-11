<?php

include_once('../../Controller/CourseC.php');

$courseC = new CourseC();
$courses = $courseC->afficherCourses()->fetchAll();
$chapterC = new CourseC();
$lis = $chapterC->afficherchapter()->fetchAll();


include('header.php');

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Courses List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div><a href="addCourse.php" class="btn btn-primary">Add Course</a></div><br>
              <div><a href="addchapter.php" class="btn btn-primary">Add chapter</a></div><br>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Teacher</th>
                      <th >Type</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    for ($i=0; $i <count($courses); $i++) {
                      echo '<tr>';
                      echo '<td>'.$courses[$i]['id'].'</td>';
                      echo '<td style="width:25%"><center><img src="http://localhost/edueasy/Back/Views/images/course/'.$courses[$i]['image'].'" style="width:50%; height:50%; margin:auto; display:block;" alt=""></center></td>';
                      echo '<td>'.$courses[$i]['nom'].'</td>';
                      echo '<td>'.$courses[$i]['category'].'</td>';
                      echo '<td>'.$courses[$i]['teacher'].'</td>';

                      if($courses[$i]['free']==0)
                      {
                        echo '<td><span class="badge bg-danger">Paid</span></td>';

                      }else
                      {
                        echo '<td><span class="badge bg-success">Free</span></td>';
                      }

                      echo '<td><a class="btn btn-info" href="updateCourse.php?id='.$courses[$i]['id'].'">Update</a> <a class="btn btn-danger" href="deleteCourse.php?id='.$courses[$i]['id'].'">Delete</a></td>';


                      echo '</tr>';
                    }


                    ?>

                  </tbody>
                </table>
                <table  class="table table-bordered">
                                    <thead>
                                        <tr>
                                        
                                            <th>#</th>
                                            <th>Name</th>
                                      
                                            <th>Category</th>
                                          
                                          
                                            <th> Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                          
 <?php
foreach($lis as $pro){

?>

                                            <td> <?php echo $pro['id'] ?> </td>
                                            <td><?php echo $pro['nom'] ?></td>
                                          
                                            <td><?php echo $pro['category'] ?></td>
                                          
                                        <td><a class="btn btn-info" href="updatechapter.php?id='.$chapter[$i]['id'].'">Update</a> <a class="btn btn-danger" href="deletechapter.php?id='.$chapter[$i]['id'].'">Delete</a></td>
<input type="hidden" value="<?php echo $pro['id'] ?>" name="id">

<form method="GET" action="updatechapter.php">

<input type="hidden" value="<?php echo $pro['id'] ?>" name="id">
</form></td>
                                            </td>
                                        </tr>
                                        <?php  } ?>
                                    </tbody>
                                </table>
              </div>
              <!-- /.card-body -->

            </div>
            <!-- /.card -->


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
