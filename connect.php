<?php
/*
$userName=$_POST['userName'];
$userLastname= $_POST['userLastname'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$pwd= $_POST['pwd'];
$conPwd= $_POST['conPwd'];
$gender = $_POST['gender'];


        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "talos";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    die('Could not connect to the database.');
}
else {
    $Select = "SELECT email FROM registration WHERE email = ? LIMIT 1";
    $Insert = "INSERT INTO registration(userName, userLastname, phoneNumber, email, pwd, conPwd, gender) values(?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($Select);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($resultEmail);
    $stmt->store_result();
    $stmt->fetch();
    $rnum = $stmt->num_rows;
    if ($rnum == 0) {
        $stmt->close();
        $stmt = $conn->prepare($Insert);
        $stmt->bind_param("ssssii",$userName, $userLastname, $phoneNumber, $email, $pwd, $conPwd, $gender);
        if ($stmt->execute()) {
            echo "New record inserted sucessfully.";
        }
        else {
            echo $stmt->error;
        }
    }
    else {
        echo "Someone already registers using this email.";
    }
    $stmt->close();
    $conn->close();
}
}
 else {
echo "All field are required.";
die();
}
}
else {
echo "Submit button is not set";
}
*/
echo "hello";
?>