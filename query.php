<?php
	session_start();
	
	$name = $_POST["Name"];
	$email = $_POST["Email"];
	$mob = $_POST["Mobile"];
	$msg = $_POST["Message"];
	$mysqlport = getenv('S2G_MYSQL_PORT');
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$connect = mysql_connect($dbhost, $dbuser, $dbpass);
	
	mysql_select_db("guvi");
	
	$insertquery = "INSERT INTO queries (Name, Email, Mobile, Message) VALUES ('$name', '$email', '$mob', '$msg')";
	
	if(mysql_query($insertquery , $connect))
	{
		$_SESSION['error']=1;
	}
	else
	{
		$_SESSION['error']=2;
	}
	mysql_close($connect);
	
	header('Location: queries.php');
?>