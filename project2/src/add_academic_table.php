<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "myserver";
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("error detected" . mysqli_connect_error());
} else {
   
// Create database
$sql = "CREATE TABLE education(id INT PRIMARY KEY AUTO_INCREMENT,
uid INT,
name VARCHAR(20),
t10 INT,
t12 INT,
ug INT,
pg INT)";
if (mysqli_query($conn, $sql)) {
  //echo "Database created successfully";
} else {
  //echo "Already Created database: " . mysqli_error($conn);
}
}



?>