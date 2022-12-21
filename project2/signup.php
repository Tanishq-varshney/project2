<?php


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


$name = $_POST['fname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$passmd=md5($pass);


$sql = "INSERT INTO account(id,name,email,pass) VALUES (NULL, '$name','$email','$passmd')";


$result = mysqli_query($conn, $sql);
if ($result) {
	echo '<script> alert("Add successfully") 
	window.location.href="main.html";</script>';
	
	
} else {
	echo '<script> alert("Not Successful") 
	window.location.href="main.html";</script>' . mysqli_error($conn);
	
}




?>