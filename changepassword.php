<?php
	session_start();

	$id = $_SESSION['id'];
	$mysqlport = getenv('S2G_MYSQL_PORT');
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";

    $connect = mysql_connect($dbhost, $dbuser, $dbpass);
    mysql_select_db("guvi");
	
	$currpass = $_POST['curpwd'];
	$newpass = $_POST['conf-pwd'];
 
	$search_query = "SELECT * FROM users WHERE ID = '$id' AND Password = '$currpass'";

    $result = mysql_query($search_query,$connect);
	$row=mysql_fetch_assoc($result);
	
	if(empty($row))
	{
		$_SESSION['error']=1;
	}
    else
    {
		$update_query = "UPDATE users SET Password='$newpass' WHERE ID = '$id'";
		if(mysql_query($update_query,$connect))
		{
			$_SESSION['error'] = 2;
		}
		else
		{
			$_SESSION['error'] = 3;
		}
	}
	
		header("Location:password.php");
?>
