<?php

	session_start();
$name=$_SESSION["name"];
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

$sql = "select * from education where name='$name'";
$query = mysqli_query($conn, $sql);
$result = mysqli_num_rows($query);
if (!$result) {


} else {
    
    $data = mysqli_fetch_assoc($query);
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
<link rel="stylesheet" href="src/style_main.css">
<title>Add Education</title>
</head>
<body>
<div class="section">
 <div class="container">
	<div class="row full-height justify-content-center">
		<div class="col-12 text-center align-self-center py-5">
			<div class="section pb-5 pt-5 pt-sm-2 text-center">
				<h6 class="mb-0 pb-3"><span>ACEDIMIC DETAILS</span></h6>
				
			<div class="card-3d-wrap mx-auto">
					<div class="card-3d-wrapper">
						<div class="card-front">
							<div class="center-wrap">
								<div class="section text-center">
									<form action="display.php" method="POST">
									<h4 class="mb-4 pb-3">Show Education- <?php echo $_SESSION['name']; ?></h4>
									<div class="form-group">
										<input type="number" name="10" class="form-style" value="<?php echo $data['t10']; ?>" readonly placeholder="Your 10th Percentage" id="10" >
										<i class="input-icon uil uil-lock-alt"></i>
									</div>	
									<div class="form-group mt-2">
										<input type="number" name="12" class="form-style" value="<?php echo $data['t12']; ?>" readonly placeholder="Your 12th Percentage" id="12" >
										<i class="input-icon uil uil-lock-alt"></i>
									</div>	
									<div class="form-group mt-2">
										<input type="number" name="ug" class="form-style" value="<?php echo $data['ug']; ?>" readonly placeholder="Your Graduation" id="ug" >
										<i class="input-icon uil uil-lock-alt"></i>
									</div>
									<div class="form-group mt-2">
										<input type="number" name="pg" class="form-style" value="<?php echo $data['pg']; ?>" readonly  placeholder="Your Post Graduation" id="pg" >
										<i class="input-icon uil uil-lock-alt"></i>
									</div>
									
									<input type="submit" class="btn mt-4" value="back" >
								</form>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</body>
</html>
	