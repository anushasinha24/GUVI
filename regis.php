<!DOCTYPE html>
<html>

<body>

<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$mob = $_POST['mob'];
	$gender = $_POST['gender'];
	$type = $_POST['type'];
	$language = $_POST['language'];
	$dob = $_POST['dob'];
	$pass = $_POST['conf-pwd'];
	
	$mysqlport = getenv('S2G_MYSQL_PORT');
	$dbhost = "localhost".$mysqlport;
	$dbuser = 'root';
	$dbpass = '';
	$connect = mysql_connect($dbhost, $dbuser, $dbpass);
	
	$flag=0;
	
	mysql_select_db("guvi");
	$insertquery = "INSERT INTO users (Name, Email, Mobile, Gender, Profession, Language, DOB, Password) VALUES ('$name', '$email', '$mob', '$gender', '$type', '$language', '$dob', '$pass')";
	if(mysql_query($insertquery , $connect))
			$flag=1;
	if($flag==1)
	{
		header('Location: login.php');
	}
	else
	{
		echo "Account with the given email id already exists. If you have forgotten your password, <a href='forgot.html'>click here</a>";
	}
	mysql_close($connect);
?>

</body>
</html>