<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- <script type="text/javascript">
		/*add blog function*/
		function add_blog()
		{
			var obj;
			if(window.XMLHttpRequest){
				obj=new XMLHttpRequest();
			}
			else{
				obj=new ActiveXObject('Microsoft.XMLHTTP');
			}
			obj.onreadystatechange=function(){
				if(obj.readyState==4&&obj.status==200)
				{
					document.getElementById('ajaxdiv').innerHTML=obj.responseText;
					console.log(obj.responseText);
				}
			}
			obj.open('GET','ajax_process.php?action=addblog');
			obj.send();
		}
		/*Add Post Function*/
		function add_post()
		{
			var obj;
			if(window.XMLHttpRequest){
				obj=new XMLHttpRequest();
			}
			else{
				obj=new ActiveXObject('Microsoft.XMLHTTP');
			}
			obj.onreadystatechange=function(){
				if(obj.readyState==4&&obj.status==200)
				{
					document.getElementById('ajaxdiv').innerHTML=obj.responseText;
					console.log(obj.responseText);
				}
			}
			obj.open('GET','ajax_process.php?action=addpost');
			obj.send();
		}

	</script> -->
</head>
<body>
	<div class="col-sm-2">
					<div class="border-end" id="sidebar">
		                <div class="list-group list-group-flush">
		                    <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-dark text-light" href="admin-panel.php">Dashboard</a>
		                    <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-dark text-light" href="user-requests.php">New User Request</a>
		                    <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-dark text-light" href="view-all-users.php">View All Users</a>
		                    <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-dark text-light" href="status-user.php">Change Status Of Users</a>
		                    <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-dark text-light" href="#">Search User</a>
		                    <a  class="list-group-item list-group-item-action list-group-item-light p-3 bg-dark text-light" href="add-blog.php">Add Blog</a>
		                    <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-dark text-light" href="add-post.php">Add Post</a>
		                    <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-dark text-light" href="#!">View All Post</a>
		                    <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-dark text-light" href="logout_process.php">Logout</a>
		                </div>
		            </div>
	            </div>

</body>
</html>