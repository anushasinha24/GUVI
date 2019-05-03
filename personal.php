<?php
	session_start();

	$mobile = $_POST['Mobile'];
	$gender = $_POST['Gender'];
	$dob = $_POST['DOB'];
	$id = $_SESSION['id'];
	$type = $_POST['type'];
	$language = $_POST['language'];
	
	include("database.php");
	
	$updatequery = "UPDATE users SET Mobile = '$mobile', Gender = '$gender', DOB = '$dob', Profession = '$type', Language = '$language' WHERE ID='$id'";
	
	if(mysql_query($updatequery , $connect))
		$var=1;
	else
		$var=0;
	
		if(($var==1))
	{
		$_SESSION['error'] = 1;
		header("Location: update.php");
	}
	else
	{
		$_SESSION['error'] = 2;
		header("Location: update.php");
	}
	mysql_close($connect);
?>