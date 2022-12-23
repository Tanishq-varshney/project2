<?php


session_start();
$Email=$_POST["logemail"];
$Pass=md5($_POST["logpass"]);


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


	$sql = "select * from account where email='$Email'and pass='$Pass'";
$query = mysqli_query($conn, $sql);
$result = mysqli_num_rows($query);
if (!$result) {
	
	echo '<script> alert("Wrong!!! , Please check your EMAIL  and PASSWORD") 
	window.location.href="main.html";</script>';
	 
	
} else {
     $data = mysqli_fetch_assoc($query);
	 $_SESSION['id'] = $data['id'];
	 $_SESSION['email'] = $data['email'];
	 $_SESSION['pass'] = $_POST["logpass"];
    


if($data['pass'] == $Pass){
	echo '<script> alert("Successfully Login") 
	window.location.href="adddata.php";</script>';
		}
		else{
			echo '<script> alert("Wrong!!! , Please check your EMAIL and PASSWORD") 
			window.location.href="main.html";</script>';
	
		}

	}
