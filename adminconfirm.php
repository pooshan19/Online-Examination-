<? php session_start() ?>
<html>
<head>
<title>Admin</title>
<style>
	div.d1{
		padding-top:50px;
	}
	a.c1{
		height:25px;
		width:50%;
		background-color:rgb(204, 245, 255);
		border-left:blue;
		padding-top:5px;
	}
	a.c2{
		height:25px;
		width:50%;
		background-color:rgb(255, 255, 153);
		border-left:yellow;
		padding-top:10px;
	}
	a.c3{
		height:25px;
		width:50%;
		background-color:rgb(198, 255, 179);
		border-left:green;
		padding-top:10px;
	}
</style>
</head>
<body>
<center>
<h1>Welcome Admin</h1>
<div class="d1">
<a href="create.php" style=" text-decoration:none; " class="c1"><p class="p1">Create a new category for exam</p></a>
<a href="update.php" style=" text-decoration:none; " class="c2"><p class="p1">Update existing category of exam</p></a>
<a href="delete.php" style=" text-decoration:none; " class="c3"><p class="p1">Delete a existing category of exam</p></a> 
</div>
</center>
</body>
</html>