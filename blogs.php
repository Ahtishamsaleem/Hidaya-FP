<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<nav class="navbar navbar-expand-lg  bg-light border border-2 border-dark rounded">
				  <div class="container-fluid bg-secondary">
				    <a class="navbar-brand" href="#">Blogs</a>
				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
				    <div class="collapse navbar-collapse" id="navbarNav">
				      <ul class="navbar-nav">
				        <li class="nav-item">
				          <a class="nav-link active  border border-2 border-dark rounded text-light" aria-current="page" href="index.php">Home</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link text-light border border-2 border-dark rounded" href="#">Internatioanl News</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link text-light border border-2 border-dark rounded" href="#">Bussiness</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link text-light border border-2 border-dark rounded" href="#">Sports</a>
				        </li>
				         <li class="nav-item">
				          <a class="nav-link text-light border border-2 border-dark rounded" href="#">Science & tech</a>
				        </li>
				         <li class="nav-item">
				          <a class="nav-link text-light border border-2 border-dark rounded" href="#">Sports</a>
				        </li>
				         <li class="nav-item">
				          <a class="nav-link text-light border border-2 border-dark rounded" href="#">Life Style</a>
				        </li>
				         <li class="nav-item">
				          <a class="nav-link text-light border border-2 border-dark rounded" href="#">Health</a>
				        </li>
				         <li class="nav-item">
				          <a class="nav-link text-light border border-2 border-dark rounded" href="#">Movies</a>
				        </li>
				      </ul>
				    </div>
				  </div>
				</nav>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<?php require('leftsidebar.php'); ?>
			<div class="col-sm-8 ">
				<h1 class="text-center bg-dark text-light">Blog</h1>
				<h3 class="lead">Post Title</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<?php require('rightsidebar.php'); ?>
		</div>
	</div>

</body>
</html>