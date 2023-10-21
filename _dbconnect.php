<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "alumni123";

$conn = new mysqli($servername, $username,$password,$database,3307);
if($conn->connect_error){
    die("Error". $conn->connect_error);
}
else {
    // echo "Connection Successful";
  
}
?>