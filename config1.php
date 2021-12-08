<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$pwd = ""; /* pwd */
$dbname = "talos"; /* Database name */

$con = mysqli_connect($host, $user, $pwd,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}