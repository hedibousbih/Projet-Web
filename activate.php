<?php
  
    // Connect to database 
    $con=mysqli_connect("localhost","root","","talos");
    // Check if id is set or not if true toggle,
    // else simply go back to the page
    if (isset($_GET['username'])){
  
        // Store the value from get to a 
        // local variable "course_id"
        $new_username=$_GET['username'];
  
        // SQL query that sets the status
        // to 1 to indicate activation.
        $sql="UPDATE `registration` SET 
             `status`=1 WHERE username='$new_username'";
  
        // Execute the query
        mysqli_query($con,$sql);
    }
  
    // Go back to course-page.php
    header('location: admin.php');
?>