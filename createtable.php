<? php session_start() ?>
<html>
<head><title>Create table</title></head>
<body>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";
	$con = mysqli_connect($servername,$username,$password,$dbname);
	if(!$con)
	{
		echo "Connection Failed<br>";
	}
	if(isset($_POST['tname'])){$tname = mysqli_real_escape_string($con,$_POST['tname']);} 
	$sql1 = "CREATE TABLE `".$tname."` (question VARCHAR(500),option1 VARCHAR(500),option2 VARCHAR(500),option3 VARCHAR(500),option4 VARCHAR(500),answer VARCHAR(500))";
	$sql2 = "INSERT into category(table_name) VALUES('$tname')";
	$result1 = mysqli_query($con,$sql1);
	$result2 = mysqli_query($con,$sql2);
	if($result2)
	{
	}
	else
	{
		echo "ERROR1<br>";
	}
	if($result1)
	{
		echo "...Created successfully...";
	}
	else
	{
		echo "ERROR2<br>";
	}
	mysqli_close($con);
?>
</body>
</html>