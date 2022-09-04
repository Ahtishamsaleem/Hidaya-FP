<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
	<style type="text/css">
		#register-btn{
			display: none;
		}
	</style>
</head>
<body>
	<!-- HEADER  -->
	<?php include('header.php');?>
	<!-- HEADER  -->

	<!-- CONTENT  -->
	<div class="container-fluid" style="margin-top: 150px;">
		<div class="row">
			<div class="col-sm-2 bg-dark"></div>
			<div class="col-sm-8 rounded mt-3">
				<h3 class="text-center bg-dark text-light" align="center">Register YourSelf To Explore Blogs</h3>
					<form class="row g-3">
				  		<div class="col-md-12">
				    		<label for="validationDefault01" class="form-label">First name</label>
				    		<input type="text" class="form-control" id="validationDefault01" name="firstname" required>
				  		</div>
				  		<div class="col-md-12">
						    <label for="validationDefault02" class="form-label">Last name</label>
						    <input type="text" class="form-control" id="validationDefault02" name="lastname" required>
				  		</div>
				  		<div class="col-md-1">
				    		<label for="validationDefault03" class="form-label">Gender</label>
						</div>
						<div class="col-md-11" style="word-spacing: 40px;">
							<input type="radio" name="gender" value="male" required align="center">Male
							<input type="radio" name="gender" value="female" required align="c">Female
				  		</div>
				  		<div class="col-md-12">
						    <label for="validationDefault02" class="form-label">Date Of Birth</label>
						    <input type="date" class="form-control" id="validationDefault02" name="dateofbirth" required>
				  		</div>
				  		<div class="col-md-12">
						    <label for="validationDefault02" class="form-label">Last name</label>
						    <input type="file" class="form-control" id="validationDefault02" name="profileimage" required>
				  		</div>
				  		<div class="col-md-12">
						    <label for="validationDefault02" class="form-label">Last name</label>
						    <textarea name="address" placeholder="Enter Address Here" style="width:70%"></textarea>
						</div>
						<div class="col-md-12 text-center">
							<a class="btn btn-dark" href="register_process.php">Register</a>
					  </div>
					  <div class="col-md-12 text-center">
							<a class="btn btn-outline-success" href="login.php">Alreday Have Account</a>
					  </div>
					</form>
			</div>
			<div class="col-sm-2 bg-dark"></div>
	<!-- CONTENT  -->
	<!-- FOOTER  -->
	<?php include('footer.php'); ?>
	<!-- FOOTER  -->
</body>
</html>