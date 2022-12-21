<?php


session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "myserver";
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("error detected" . mysqli_connect_error());
} else {
    //echo $alert1;
}

$id = $_SESSION["id"];

$sql = "select * from userdetails where id='$id'";
$query = mysqli_query($conn, $sql);
$result = mysqli_num_rows($query);
if (!$result) {

    echo '<script> alert("Something is Wrong!!! ") 
	window.location.href="login.html";</script>';
} else {
    // $data = mysqli_fetch_assoc($query);
    //    echo "Email".$data["email"]."<br>";
       //echo $alert2;


}
$update="UPDATE";
$sql2 = "select COUNT(u_id) from p2product where u_id='$id'";
$query2 = mysqli_query($conn, $sql2);
$data2 = mysqli_fetch_assoc($query2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/stylesdisp1.css">
    <title>View Details</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Profile Page</h1>
        </div>
        <ul>
            <li><img src="src/dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li>
            <a href="show_all.php">
            <li><img src="src/help-web-button.png" alt="">&nbsp;<span>Full Detail</span> </li></a>
            <a href="product_table.php">
            <li><img src="src/login.png" alt="">&nbsp;<span>Add Product</span> </li></a>
            <!--<li><img src="help-web-button.png" alt="">&nbsp;<span>Extra</span> </li>
            <li><img src="payment.png" alt="">&nbsp;<span>Income</span> </li> -->
            <a href="Academic.php">
            <li><img src="src/help-web-button.png" alt="">&nbsp; <span>Add Education</span></li></a>
            <a href="show_detail.php">
            <li><img src="src/help-web-button.png" alt="">&nbsp; <span>Show_Details</span></li></a>
            <a href="main.html"  <?php  ?> >
            <li><img src="src/exit.png"  alt="">&nbsp;<span>Log Out</span> </li></a>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="src/search.png" alt=""></button>
                </div>
                <div class="user">
                    <a href="signup2up.php" class="btn">Add User</a>
                    <img src="src/students.png" alt="">
                    <div class="img-case">
                        <a href="update_data.php">
                         <img src="src/login.png"  alt="">
                        </a>
                         <span  > Update</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <!-- <div class="card">
                    <div class="box">
                        <h1>2194</h1>
                        <h3>Students</h3>
                    </div>
                    <div class="icon-case">
                        <img src="students.png" alt="">
                    </div>
                </div> -->
                <!-- <div class="card">
                    <div class="box">
                        <h1>53</h1>
                        <h3>Teachers</h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div> -->
                <!-- <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Schools</h3>
                    </div>
                    <div class="icon-case">
                        <img src="schools.png" alt="">
                    </div>
                </div> -->
                <!-- <div class="card">
                    <div class="box">
                        <h1>350000</h1>
                        <h3>Income</h3>
                    </div>
                    <div class="icon-case">
                        <img src="income.png" alt="">
                    </div>
                </div> -->
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>USERS DETAILS</h2>
                        
                    </div>
                    <table border="1" class="table table-bordered" style="max-width: 1100px" cellspacing="7" width="100%">
                        <thead>
                            <tr>
                                <th style="text-align: center" width="10%">Name</th>
                                <th style="text-align: center" width="10%">Email</th>
                                <th style="text-align: center" width="10%">Phone</th>
                                <!-- <th style="text-align: center" width="10%">Password</th> -->
                                <th style="text-align: center" width="10%">Gender</th>
                                <th style="text-align: center" width="10%">Age</th>
                                <th style="text-align: center" width="10%">Date of Birth</th>
                                <th style="text-align: center" width="20%">Bio</th>
                                <th style="text-align: center" width="10%">Total Added Product</th>




                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {


                            ?>
                                    <tr>

                                        <td style="text-align: center"><?php echo $data["firstname"] . " " . $data["lastname"]; ?></td>
                                        <td style="text-align: center"><?php echo $data["email"]; ?></td>
                                        <td style="text-align: center"><?php echo $data["phn"]; ?></td>
                                        <td style="text-align: center"><?php echo $data["gender"]; ?></td>
                                        <td style="text-align: center"><?php echo $data["age"]; ?></td>
                                        <td style="text-align: center"><?php echo $data["dob"]; ?></td>
                                        <td style="text-align: center"><?php echo $data["bio"]; ?></td>
                                        <td style="text-align: center"><?php echo $data2['COUNT(u_id)']; ?></td>

                                    </tr>

                                    </tr>
                            <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
                <!-- <div class="new-students">
                    <div class="title">
                        <h2>New Students</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>option</th>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>

                    </table>
                </div> -->
            </div>
        </div>
    </div>
</body>

</html>