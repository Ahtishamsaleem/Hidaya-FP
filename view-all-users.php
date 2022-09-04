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
	<?php include('admin-header.php'); ?>
	<div class="container-fluid mt-3 ">
		<div class="row">
			<?php include('admin-leftsidebar.php'); ?>
			<div class="col-sm-8 border border-dark border-2 shadow rounded">
				<h3 class="text-center">View All Users</h3>
				<table class="table border border-2 border-dark">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">First</th>
				      <th scope="col">Last</th>
				      <th scope="col">Handle</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>@mdo</td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Jacob</td>
				      <td>Thornton</td>
				      <td>@fat</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td colspan="2">Larry the Bird</td>
				      <td>@twitter</td>
				    </tr>
				  </tbody>
				</table>
			</div>
			<?php include('admin-rightsidebar.php'); ?>
		</div>
	</div>
</body>
</html>