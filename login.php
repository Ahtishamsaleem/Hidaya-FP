<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
	<style type="text/css">
		a{
			text-decoration: none;
			margin-left: 10px;
			margin-top: 10px;
		}
		#login-btn{
			display: none;
		}
	</style>
</head>
<body >
		<?php include('header.php'); ?>
		<hr>
		<div class="container-fluid border border-1 border-dark  text-light" style="margin-top: 160px;">
			<div class="row">
				<div class="col-sm-2 bg-dark"></div>
					<div class="col-sm-8 p-3" style="height: 380px;">
						<h3 class="text-center text-light bg-dark rounded">Blogging Application</h3>
							<form class="row g-3">
					  			<div class="col-md-12 text-dark">
					    			<label for="validationServer01" class="form-label">Enter Email</label>
					    			<input type="text" class="form-control is-valid" id="validationServer01" placeholder="Enter Email Address here" required>
					    		
					  			</div>
					  				<div class="col-md-12 text-dark">
					    				<label for="validationServer01" class="form-label">Enter Password</label>
					    				<input type="text" class="form-control is-valid" id="validationServer01" placeholder="Enter Password here" required>
					    		
					  				</div>
					 
					  				<div class="col-12 text-center">
					    				<button class="btn btn-dark" type="submit">Login</button>
					    				<br>
					    				<a href="" class="btn btn-outline-danger">Forget Password</a>
					    				<a href="register.php" class="btn btn-outline-success">Register New Account</a>
					  				</div>
							</form>
					</div>
				<div class="col-sm-2 bg-dark"></div>
			</div>
		</div>
		<?php include('footer.php'); ?>
</body>
</html>