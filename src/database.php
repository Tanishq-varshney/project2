<?php

    



$servername = "localhost";
$username = "root";
$password = "";
$db = "myserver";
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("error detected" . mysqli_connect_error());
} else {
    //echo $alert2;
}



?>