<?php
include("src/userdetail_table.php");
session_start();
include("src/database.php");
$id = $_SESSION["id"];
$email=$_SESSION["email"];
$pass=$_SESSION["pass"];

$sql = "select * from userdetails where email='$email'";
$query = mysqli_query($conn, $sql);
$result = mysqli_num_rows($query);
if (!$result) {

   
} else {
    
    $data = mysqli_fetch_assoc($query);
    $fname= $data['firstname'];
    $lname= $data['lastname'];
    $phone= $data['phn'];
    $gender= $data['gender']; 
    $age= $data['age'];
    $dob= $data['dob'];
    $bio= $data['bio'];
    $_SESSION['name'] = $data['firstname']." ".$data['lastname'];
    
        
}

?>

<html>

<head>
	<title>Updation form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="src/style__add.css">
</head>

<body>
	<div class="Registeration-form">
		<h1>Update Your Details</h1>
		<form action="update.php" method="POST" onsubmit="return validation()">
		<div class="form-group">
				<label>First Name</label>
				<input type="text" name="firstname" id="firstname" placeholder="Enter your Firstname" value="<?php echo $fname;?>" >
				<span id="fntext"  class="text-danger font-weight-bold"></span>
			</div>


			<div class="form-group">
				<label>Last Name</label>
				<input type="text" name="lastname" id="lastname" value="<?php echo $lname; ?>"  placeholder="Enter your Lastname" >
				<span id="lntext"  class="text-danger font-weight-bold"></span>
			</div>



			<div class="form-group">
				<label >Email</label>
				<input type="email" name="email" id="email" value="<?php echo $email; ?>"  placeholder="Enter valname Email" readonly>
                <span id="etext" class="text-danger font-weight-bold"></span>
           
			</div>


			<div class="form-group">
				<label>Phone Number</label>
				<input type="number" name="phone" id="phone" value="<?php echo $phone; ?>" placeholder="Please enter Phone number" >
				<span id="pntext" class="text-danger font-weight-bold"></span>
			</div>


			<div class="form-group">
				<label >Password</label>
				<input type="password" name="pass" id="password"  value="<?php  echo $pass;?>" placeholder="Enter Password required" readonly >
                <span id="ptext" class="text-danger font-weight-bold"></span>
               
			</div>


			<div class="form-group">
				<label>Gender</label>
				<input type="text" name="gender" id="gender" value="<?php echo $gender; ?>" placeholder="Enter your Gender" >
				<span id="gtext"  class="text-danger font-weight-bold"></span>
			</div>


			<div class="form-group">
				<label>Age</label>
				<input type="number" name="age" value="<?php echo $age; ?>" placeholder="Enter your Age" >
				<span id="atext"  class="text-danger font-weight-bold"></span>
			</div>


			<div class="form-group">
				<label>Birth date</label>
				<input type="date" name="dob" value="<?php echo $dob; ?>" placeholder="Date of Birth" >
				<span id="dttext"  class="text-danger font-weight-bold"></span>
			</div>



			<div class="form-group">
				<label>Bio</label>
				<input type="text" name="bio" placeholder="This is My Bio" value="<?php echo $bio; ?>"><br>
			</div>
         
                <input type="submit" class="btn btn-success w-100" name="submit" value="UPDATE MY PROFILE" >
                </form>    
     
		
		<script>
            function validation()
            {
                var user=document.getElementById('email').value;
                var pass=document.getElementById('password').value;
				var phone=document.getElementById('phone').value;
                var gender=document.getElementById('gender').value;
				var firstn=document.getElementById('firstname').value;
                var lastn=document.getElementById('lastname').value;
                
				
				if(firstn=="")
                {
                    document.getElementById('fntext').innerHTML=" Please fill your Firstname";
                    return false;
                }

				if(firstn.length<2)
                {
                    document.getElementById('fntext').innerHTML=" You fill must be more 3 character";
                    return false;
                }

                if(!isNaN(firstn))
                {
                    document.getElementById('fntext').innerHTML="  You must not use Number";
                    return false;
                }
                
                if(lastn=="")
                {
                    document.getElementById('lntext').innerHTML=" Please fill your Surname";
                    return false;
                }

				if(lastn.length<2)
                {
                    document.getElementById('lntext').innerHTML=" You fill must be more 3 character";
                    return false;
                }

                if(!isNaN(lastn))
                {
                    document.getElementById('lntext').innerHTML=" You must not use Number";
                    return false;
                }

				if(user=="")
                {
                    document.getElementById('etext').innerHTML=" Please fill your Email ID";
                    return false;
                }

				if(phone=="")
                {
                    document.getElementById('pntext').innerHTML=" Please fill your Phone Number";
                    return false;
                }

				if(phone.length!=10)
                {
                    document.getElementById('pntext').innerHTML=" Your filled Phone Number must be 10 digits";
                    return false;
                }

				if(pass=="")
                {
                    document.getElementById('ptext').innerHTML=" Please fill your password";
                    return false;
                }

                if((pass.length<5) || (pass.length>=40))
                {
                    document.getElementById('ptext').innerHTML=" Password length must be between 6 to 20";
                    return false;
                }
                

				if(gender=="")
                {
                    document.getElementById('ptext').innerHTML=" Please fill your gender";
                    return false;
                }
				
                if((gender.toLowerCase()==male) || (gender.toLowerCase()==female))
                {
                    document.getElementById('gtext').innerHTML=" Enter only male or female";
                    return false;
                }
                
                

				
            }
        </script>

	</div>
</body>

</html>
