<?php
	session_start();
	
	include('db.php');
	
	$Name = $_POST["Name"];
	$Email = $_POST["Email"];
	$Mobile = $_POST["Mobile"];
	$Message = $_POST["Message"];	
	
	$insertquery = $DBcon->prepare("INSERT INTO queries(Name,Email,Mobile,Message) VALUES(:Name, :Email,:Mobile,:Message)");
 
	$insertquery->bindparam(':Name', $Name);
	$insertquery->bindparam(':Email', $Email);
	$insertquery->bindparam(':Mobile', $Mobile);
	$insertquery->bindparam(':Message', $Message);
		
	if($insertquery->execute())
	{
		$res="Query submitted successfully.";
		echo json_encode($res);
	}
	else
	{
		$error="Couldn't submit query. Please try again later.";
		echo json_encode($error);
	}
?>