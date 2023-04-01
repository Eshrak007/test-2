<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="web_engineering";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
    echo "database connected Successfully.";
}
?>
<!-- Name: Mir Mohaiminul Islam
Id:181-15-2052
section:PC-D
-->