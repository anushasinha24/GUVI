<?php
	session_start();
	
	include('db.php');
	
	$UserName = $_POST["UserName"];
    $Password = $_POST["Password"];	
	
	$searchquery = $DBcon->prepare("SELECT * FROM users WHERE Email = :UserName AND Password = :Password");
 
	$searchquery->bindparam(':UserName', $UserName);
	$searchquery->bindparam(':Password', $Password);
		
	if($searchquery->execute())
	{
		$result = mysql_query($search_query,$connect);
		$row=mysql_fetch_assoc($result);
	
		if(empty($row))
		{
			$error="Invalid email address or password.";
			echo json_encode($error);
		}
		else
		{
			$_SESSION['id'] = $row['ID'];
			header("Location:dashboard.php");    
		}   
	}
	else
	{
		$error="Error occured. Please try again later..";
		echo json_encode($error);
	}
?>
