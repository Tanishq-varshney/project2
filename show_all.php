<?php
session_start();
$id=$_SESSION['id'];
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
$sql= "SELECT * FROM userdetails INNER JOIN education ON userdetails.id=education.uid";
$query = mysqli_query($conn, $sql);
$result = mysqli_num_rows($query);
if (!$result) {

} else {
}


?>
<html>

<head>
    <title>SHOW DETAIL PAGE</title>
    <link rel="stylesheet" href="src/style_show1.css">
</head>

<body>
    <div>
        <table align="center">
            <div class="title" >
                <thead>Your Detail here</thead>
            </div>
            <div>
                <tbody>
                    <tr>
                        <th colspan="7" style="text-align: center" width="70%">Peronal Detail</th>
                        <th colspan="4" style="text-align: center" width="30%">ACEDIMIC Detail</th>
                    <tr>
                        <th style="text-align: center" width="9%">Name</th>
                        <th style="text-align: center" width="9%">Email</th>
                        <th style="text-align: center" width="9%">Phone</th>
                        <th style="text-align: center" width="9%">Gender</th>
                        <th style="text-align: center" width="9%">Age</th>
                        <th style="text-align: center" width="9%">Date of Birth</th>
                        <th style="text-align: center" width="9%">Bio</th>
                    
                        <th style="text-align: center" width="9%">10th</th>
                        <th style="text-align: center" width="9%">12th</th>
                        <th style="text-align: center" width="9%">Under Graduation</th>
                        <th style="text-align: center" width="9%">Post Graduation</th>
                    </tr>
                    
                    <?php
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {


                            ?>
                    <tr>
                        <td style="text-align: center"><?php echo $data['name']; ?></td>
                        <td style="text-align: center"><?php echo $data['email'];  ?></td>
                        <td style="text-align: center"><?php echo $data['phn'];  ?></td>
                        <td style="text-align: center"><?php echo $data['gender'];  ?></td>
                        <td style="text-align: center"><?php echo $data['age'];  ?></td>
                        <td style="text-align: center"><?php echo $data['dob'];  ?></td>
                        <td style="text-align: center"><?php echo $data['bio'];  ?></td>
                        <td style="text-align: center"><?php echo $data['t10'];  ?></td>
                        <td style="text-align: center"><?php echo $data['t12'];  ?></td>
                        <td style="text-align: center"><?php echo $data['ug'];  ?></td>
                        <td style="text-align: center"><?php echo $data['pg'];  ?></td>
                    </tr>
                    <?php
                                }
                            }
                            ?>
                </tbody>
            </div>
            <div>
                <tfoot>THANK YOU <span>(THIS IS THE PROJECT)</span></tfoot>
            </div>
        </table>
    </div>
</body>

</html>