<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Blogging Application</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 	<?php require('header.php'); ?>
 	<div class="container-fluid" style="margin-top: 180px;">
 		<div class="row">
 			<?php include('leftsidebar.php') ?>
 			<div class="col-8 border border-dark border-1 bg-secondary">
 				<h3>Blog Title</h3>
 				<h5>Post Title</h5>
 				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
 			</div>
 			<?php include('rightsidebar.php'); ?>
 			<div class="col-sm-2">
 			</div>
 			<div class="col-8 border border-dark border-1 bg-secondary mt-2">
 				<h3>Blog Title</h3>
 				<h5>Post Title</h5>
 				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
 			</div>
 			<div class="col-sm-2">
 			</div>

 			<div class="col-sm-2">
 			</div>
 			<div class="col-8 border border-dark border-1 bg-secondary mt-2">
 				<h3>Blog Title</h3>
 				<h5>Post Title</h5>
 				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
 			</div>
 			<div class="col-sm-2">
 			</div>
 		</div>
 	</div>

 	<!-- About Us Section -->
 	<div class="container-fluid position-aboslute mt-4" id="about_us">
 		<div class="row">
 			<div class="col-sm-12 border border-dark border-1 shadow">
 				<h1 class="text-center text-decoration-underline bg-dark text-light">About Us</h1>
 				<h3 class="text-center text-decoration-underline">--Our Stories--</h3>
 				<p class="text-center">
 					<img src="images/aboutus.jpg" style="width: 35%; height: 350px; float: left;">
		 				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		 				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		 				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		 				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		 				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		 				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		 				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		 				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		 				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		 				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
 			</p>
 			</div>
 		</div>
 	</div>
 	<!-- About Us Section -->

 	<!-- Contact Us Section -->
	<div class="container-fluid position-aboslute mt-4" id="contact_us">
		<div class="row">
			<div class="col-sm-2 bg-secondary"></div>
			<div class="col-sm-8 ">
 				<h1 class="text-center text-decoration-underline bg-dark text-light">Contact Us</h1>
 				<h3 class="text-center text-decoration-underline">--Give Your Valueable  (FEEDBACK)--</h3>
 				<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Enter Your Name</label>
				  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name Here">
				</div>
 				<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Email address</label>
				  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
				</div>
				<div class="mb-3">
				  <label for="exampleFormControlTextarea1" class="form-label">Feed Back</label>
				  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>
				<div class="mb-3 text-center">
				  	<a href="feedback.php" class="btn btn-dark">Submit</a>
				</div>
			</div>
			<div class="col-sm-2 bg-secondary"></div>
		</div>	
	</div>

	<?php require('footer.php'); ?>
</body>
</html>