<?php 
if(isset($_POST["Submit"])){
	echo "hi";
$name = $_POST["name"];
$email = $_POST["email"];
$max_qual= $_POST["max_qual"];
$password = $_POST["password"];
$contactno= $_POST["contactno"];
$city = $_POST["city"];
$gender=$_POST["gender"];
$age = $_POST["age"];
$Connection=mysql_connect('localhost','root','');
$Selected=mysql_select_db('spg',$Connection);

$Query = "INSERT INTO userdetail(Name,Email,Contactno,City,max_qual,age,gender,userpassword) VALUES('$name','$email','$contactno','$city','$max_qual','$age','$gender','$password')";
  
$execute = mysql_query($Query);}



?>


<!DOCTYPE>

<html>

<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="gethired.css">
		<title>Want to Hire</title>
</head>

<body>


<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				
					<form class="" method="POST" action="gethired.php">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email" required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Select your Maximum Qualification</label>
							<div class="cols-sm-10">
								<div class="input-group">
									 <select class="form-control" name="max_qual">
														<option value="high_school">High School</option>
														<option value="senior_secondary">Senior Secondary</option>
														<option value="bachelor">Bachelor</option>
														<option value="Masters">Masters</option>
									</select> 
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Select your gender</label>
							<div class="cols-sm-10">
								<div class="input-group">
									 <select class="form-control" name="gender">
														<option value="Male">Male</option>
														<option value="Female">Female</option>
									</select> 
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Enter your Age</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="number_format"  class="form-control" name="age" id="age"  placeholder="Enter your age" required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Personal Contact Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="number_format" class="form-control" name="contactno" id="contactno"  placeholder="Contact No." required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Enter your city</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="city" id="city"  placeholder="City...." required>
								</div>
							</div>
						</div>
						
						<div class="form-group ">
							<label for="submit" class="cols-sm-2 control-label">Register</label>
							<div class="cols-sm-10">
								<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button" name="Submit" required>
								</div>
							</div>
						</div>
						
					</form>
				</div>
			</div>
		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
























































<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>