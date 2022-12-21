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
	$Password=md5($_POST['pass']);
	$Gender = $_POST['gender'];
	$Age = $_POST['age'];
	$DOB=$_POST['dob'];
	$Bio=$_POST['bio'];
	
	$id=$_SESSION["id"];
	

	$sql = "INSERT INTO userdetails VALUES ('$id', '$Firstname', '$Lastname', '$Email', '$Phone', '$Password', '$Gender', '$Age', '$DOB', '$Bio')";

	$data = mysqli_query($conn,$sql);
	if($data){
				
		echo '<script> alert("Record upload successfully") 
	window.location.href="display.php";</script>';
		
	}
	else{
		echo 'failed'.mysqli_error($conn);
	}

mysqli_close($conn);

?>
