<?php
	session_start();
	
	include('db.php');
	
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Mobile = $_POST['Mobile'];
	$Gender = $_POST['Gender'];
	$Profession = $_POST['Profession'];
	$Language = $_POST['Language'];
	$DOB = $_POST['DOB'];
	$Password = $_POST['Password'];	
	
	$insertquery = $DBcon->prepare("INSERT INTO users(Name, Email, Mobile, Gender, Profession, Language, DOB, Password) VALUES(:Name, :Email,:Mobile,:Gender, :Profession, :Language, :DOB, :Password)");
 
	$insertquery->bindparam(':Name', $Name);
	$insertquery->bindparam(':Email', $Email);
	$insertquery->bindparam(':Mobile', $Mobile);
	$insertquery->bindparam(':Gender', $Gender);
	$insertquery->bindparam(':Profession', $Profession);
	$insertquery->bindparam(':Language', $Language);
	$insertquery->bindparam(':DOB', $DOB);
	$insertquery->bindparam(':Password', $Password);
		
	if($insertquery->execute())
	{
		$res="Account created successfully. Please proceed to the login page to login to your account.";
		echo json_encode($res);
	}
	else
	{
		$error="Account with the given email id already exists.";
		echo json_encode($error);
	}
?>