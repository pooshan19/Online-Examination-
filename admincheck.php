<html>
<head><title>Admin</title><head>
<body>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";
	if(isset($_POST['adname']))
	{
		$myuserid = $_POST['adname'];
	}
	if(isset($_POST['adpass']))
	{
		$mypwd = $_POST['adpass'];
	}
	$myuserid = $_POST['adname'];
	$mypwd = $_POST['adpass'];
	$con = mysqli_connect($servername,$username,$password,$dbname);
	if(!$con)
	{
		echo "Connection Failed<br>";
	}
	$sql = "SELECT * from admin WHERE username='$myuserid' AND password='$mypwd'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_num_rows($result);
	if($row==1)
	{
		$con=mysqli_connect($servername,$username,$password,$dbname);
		$_SESSION["aname"]= $myuserid; 
		$_SESSION["apass"]= $mypwd; 
		header("location:adminconfirm.php");	
		if(!con)
		{
			echo "connection failed";
		}
		mysqli_close($con);
	}
	else
	{
		echo "wrong username or password<br> <br>Redirecting you to login page<br>";
		header('refresh:15; url=admin.html');
	}	
?>
</body>
</html>
	