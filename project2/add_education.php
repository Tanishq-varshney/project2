<?php
session_start();

include("src/add_academic_table.php");
$servername = "localhost";
$username = "root";
$password = "";
$db = "myserver";
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
	die("error detected" . mysqli_connect_error());
} else {
	//echo "Connection stablished successfully";
}

$uid=$_SESSION["id"];
$name=$_SESSION["name"];
$t10 = $_POST['10'];
$t12 = $_POST['12'];
$ug = $_POST['ug'];
$pg = $_POST['pg'];


$sql = "INSERT INTO education VALUES ( null,'$uid','$name', '$t10', '$t12', '$ug', '$pg')";

$result = mysqli_query($conn, $sql);
if ($result) {
	echo '<script> alert("Add Eduction") 
	window.location.href="display.php";</script>';
	
	
} else {
	echo '<script> alert("Not Successful") 
	window.location.href="display.php";</script>' . mysqli_error($conn);
	
}

?>