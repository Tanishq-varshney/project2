<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myserver";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE TABLE p2product(id INT(3) AUTO_INCREMENT PRIMARY KEY,
u_id INT(3),
name VARCHAR(20),
price INT(20),
image VARCHAR(50),
category VARCHAR(20))";



if (mysqli_query($conn, $sql)) {
 header("location:addproduct.php");
  } else {
    echo '<script>window.location.href="addproduct.php";</script>';
  }


?>