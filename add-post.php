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
	<?php include('admin-header.php');?>
	<div class="container-fluid">
		<div class="row">
			<?php include('admin-leftsidebar.php'); ?>
			<div class="col-sm-8">
			  <table align="center" style="border: 3px solid black; background-color:lightblue; width: 60%;">
				<h3 align="center">Add Post Data</h3>
				<form>
				<tr>
					<td>Add Categorey</td>
					<td><input type="text" name="catogorey"></td>
				</tr>
				<tr>
					<td>Add Post Title</td>
					<td><input type="text" name="catogorey"></td>
				</tr>
				<tr>
					<td>Add Description</td>
					<td><textarea name="descrip"></textarea></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="Add Blog"></td>
				</tr>
				</form>
			</table>
			     
			</div>
			<?php include('admin-rightsidebar.php'); ?>
		</div>
	</div>
</body>
</html>