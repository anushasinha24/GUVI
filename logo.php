<?php 
	session_start(); 

    $username = $_POST["UserName"];
    $password = $_POST["Password"];
	$mysqlport = getenv('S2G_MYSQL_PORT');
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";

    $connect = mysql_connect($dbhost, $dbuser, $dbpass);
    mysql_select_db("guvi");
	
	$_SESSION['error'] = 0;
 
    $search_query = "SELECT * FROM users WHERE Email = '$username' AND Password = '$password'";

    $result = mysql_query($search_query,$connect);
	$row=mysql_fetch_assoc($result);
	
	if(empty($row))
	{
		$_SESSION['error']=1;	
		header("Location:login.php");
	}
    else
    {
		$_SESSION['id'] = $row['ID'];
		header("Location:dashboard.php");    
    }
	
	mysql_close($connect);
?>
