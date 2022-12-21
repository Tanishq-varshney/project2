<?php 


$servername = "localhost";
$username = "root";
$password = "";
$db = "myserver";
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("error detected" . mysqli_connect_error());
} 
session_start();
   $Firstname=$_POST['firstname'];
	$Lastname=$_POST['lastname'];
	$Email=$_POST['email'];
	$Phone=$_POST['phone'];
	$Pass=$_POST['pass'];
	$Gender = $_POST['gender'];
	$Age = $_POST['age'];
	$DOB=$_POST['dob'];
	$Bio=$_POST['bio'];
	$Password=md5("$Pass");
	$id=$_SESSION["id"];

	$query="UPDATE userdetails SET firstname='$Firstname',lastname='$Lastname',email='$Email',phn='$Phone',pass='$Password',gender='$Gender',age='$Age',dob='$DOB',bio='$Bio' WHERE id='$id'";

	$data = mysqli_query($conn,$query);
	if($data){
		
		
		echo '<script> alert("Record upload successfully") 
	window.location.href="display.php";</script>';

		
	}
	else{
		echo 'failed';
	}
