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
$sql = "CREATE TABLE userdetails(id INT PRIMARY KEY,
firstname VARCHAR(20),
lastname VARCHAR(20),
email VARCHAR(30),
phn INT,
pass VARCHAR(40),
gender VARCHAR(7),
age INT(3),
dob DATE,
bio VARCHAR(300))";
if (mysqli_query($conn, $sql)) {
  //echo "Database created successfully";
} else {
  //echo "Already Created database: " . mysqli_error($conn);
}
}

?>