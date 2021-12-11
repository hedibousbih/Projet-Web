<?php

include_once('../../Controller/ChapterC.php');

$chapterC = new ChapterC();
$chapter = $chapterC->afficherchapter()->fetchAll();

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
                <h3 class="card-title">Chapter List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div><a href="addchapter.php" class="btn btn-primary">Add Chapter</a></div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Category</th>
                    
                      <th >Type</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    for ($i=0; $i <count($chapter); $i++) {
                      echo '<tr>';
                      echo '<td>'<div class="1chapter"></div>[$i]['id'].'</td>';
                      echo '<td style="width:25%"><center><img src="http://localhost/edueasy/Back/Views/images/chapter/'.$chapter[$i]['image'].'" style="width:50%; height:50%; margin:auto; display:block;" alt=""></center></td>';
                      echo '<td>'.$chapter[$i]['nom'].'</td>';
                      echo '<td>'.$chapter[$i]['category'].'</td>';
                

                                         ?>

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

