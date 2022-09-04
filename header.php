<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>header</title>
</head>
<body>
	<div class="position-relative">
	<div class="container-fluid border border-1 border-dark  text-light bg-secondary px-0">
			<div class="row">
				<div class="col-sm-12 display-5 mb-2">
					<img src="images/logo_icon.png" height="60px" style="margin-left: 10px;">
					Blogging
				</div>
			</div>
		</div>
		<!-- Menu bar -->
		<div class="container-fluid mt-3 px-0">
			<div class="row ">
				<div class="col-sm-12">
					<nav class="navbar navbar-expand-lg bg-dark text-light">
					    <a class="navbar-brand text-light" href="#">Navbar</a>
					    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					      <span class="navbar-toggler-icon"></span>
					    </button>
					    <div class="collapse navbar-collapse" id="navbarSupportedContent">
					      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
					        <li class="nav-item">
					          <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
					        </li>
					        <li class="nav-item">
					          <a class="nav-link text-light" href="blogs.php">Blogs</a>
					        </li>
					        <li class="nav-item dropdown">
					          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					            Categories
					          </a>
					          <ul class="dropdown-menu bg-dark">
					            <li><a class="dropdown-item text-light" href="#">News Headlines</a></li>
					            <li><a class="dropdown-item text-light" href="#">Sports News</a></li>
					            <li><a class="dropdown-item text-light" href="#">Education News</a></li>
					          </ul>
					        </li>
					        <li class="nav-item">
					          <a class="nav-link text-light" href="#about_us">About Us</a>
					        </li>
					          <li class="nav-item">
					          <a class="nav-link text-light" href="#contact_us">Contact Us</a>
					        </li>
					      </ul>
					      <form class="d-flex">
					        <a class="btn btn-outline-success text-light" type="submit" style="margin-right: 10px;" id="login-btn" href="login.php">Login</a>
					        <a class="btn btn-outline-success text-light" type="submit" href="register.php" id="register-btn" style="margin-right: 10px;">Register</a>
					      </form>
					    </div>
					  </div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</body>
</html>