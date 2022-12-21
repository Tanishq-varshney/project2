<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE myserver";
if (mysqli_query($conn, $sql)) {
  //echo "Database created successfully";
} else {
  //echo "Already Created database: " . mysqli_error($conn);
}

mysqli_close($conn);



$alert="<script>alert('Connection Not Stablished')</script>";
$servername="localhost";
$username="root";
$password="";
$db="myserver";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn){
	die($alert.mysqli_connect_error());
}
else{


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

// sql to create table
$sql = "CREATE TABLE account (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(20) NOT NULL,
email VARCHAR(50),
pass VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  //echo "Table MyGuests created successfully";
} else {
  //echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
	echo '<script> alert(" ---> Welcome In My Website <--- ") 
	window.location.href="main.html";</script>';	
}
?>