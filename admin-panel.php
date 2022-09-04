<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin panel</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
	<style type="text/css">
		#stat1
		{
			height: 130px;
			border: 2px solid black;
			background-color: orange;
			color: white; text-align: center;
			font:italic; font-size: 20px;
		}
		#stat2{
			height: 130px;
			border: 2px solid black;
			background-color: purple;
			color: white;
			text-align: center;
			font: sans-serif;
			font-size: 20px;
		}
		#stat3{
			 height: 130px;
			 border: 2px solid black;
			 background-color: darkblue;
			 color: white;
			 text-align: center;
			 font: sans-serif;
			 font-size: 20px;
		}
		#stat4{
			 height: 130px;
			 border: 2px solid black;
			 background-color: tomato;
			 color: white;
			 text-align: center;
			 font: sans-serif;
			 font-size: 20px;
		}
	</style>
</head>
<body>
	<!-- admin header -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 bg-dark">
				<h2 class="text-center text-light">Welcome To Admin Dashboard</h2>
			</div>
			<div class="col-sm-12 bg-secondary">
							<h3 class=" text-light">
								<img src="images/logo_icon.png" style="width: 5%;height: 60px;">
								Online Blogging Application
								<p style="float: right; margin-top: 10px;">
									Admin Name
								<img src="images/profile.jpg" style="width: 15%; height: 50px;">
								</p>
							</h3>
			</div>
		</div>
	</div>
	<!-- admin stats -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2 bg-dark"></div>
			<div  class="col-sm-2" id="stat1">
					<br>
					<h4>Registered Users
					324
					</h4>
				</div>
				<div class="col-sm-2" id="stat2">
					<br>
					<h4>Total Posts <br>
					5420
					</h4>
				</div>
				<div class="col-sm-2" id="stat3">
					<br>
					<h4>Online Users <br>
					100
					</h4>
				</div>
				<div class="col-sm-2" id="stat4">
					<br>
					<h4 align="center">Today Visitor<br>
					320
					</h4>
				</div>
			<div class="col-sm-2 bg-dark"></div>
		</div>
	</div>
	<!-- main page -->
	<div class="container-fluid mt-3">
		<div class="row">
			<!-- Left side bar -->
			<?php include('admin-leftsidebar.php'); ?>
				<!-- Main Content  -->
			<div class="col-sm-8 border border-1 border-dark" style="height: 400px;" 
			      id="ajaxdiv">
				<h2 class="text-center">Blog title</h2>
				<h2>Post Title</h2>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<!-- Right Side Bar -->
			<?php include('admin-rightsidebar.php'); ?>
		</div>
	</div>
	<div class="container-fluid mt-3">
		<div class="row">
			<!-- Left side bar -->
			<div class="col-sm-2"></div>
			<!-- Main Content  -->
			<div class="col-sm-8 border border-1 border-dark">
				<div class="row row-cols-1 row-cols-md-3 g-4 pb-5">
			        <div class="col">
			          <div class="card shadow border border-primary rounded">
			            <img src="image/t-2.jpg" class="card-img-top" alt="...">
			            <div class="card-body">
			              <h5 class="card-title">Post Title</h5>
			              <p class="card-text">Post Description</p>
			            </div>
			          </div>
			        </div>
			        <div class="col">
			          <div class="card shadow border border-primary rounded">
			            <img src="image/t-3.jpg" class="card-img-top" alt="...">
			            <div class="card-body">
			              <h5 class="card-title">Post Title</h5>
			              <p class="card-text">Post Decription</p>
			            </div>
			          </div>
			        </div>
			           <div class="col">
				          <div class="card shadow border border-primary rounded">
				            <img src="image/t-3.jpg" class="card-img-top" alt="...">
				            <div class="card-body">
				              <h5 class="card-title">Post Title</h5>
				              <p class="card-text">Post Decription</p>
				            </div>
				          </div>
			        </div>
			      </div>
			    </div>
			</div>
			<!-- Right Side Bar -->
			<div class="col-sm-2">
			</div>
		</div>
	</div>
	
	<!-- Footer -->
	<?php include('footer.php'); ?>
</body>
</html>