<?php

	$id = $_SESSION['id'];
	$mysqlport = getenv('S2G_MYSQL_PORT');
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";

    $connect = mysql_connect($dbhost, $dbuser, $dbpass);
    mysql_select_db("guvi");
 
    $search_query = "SELECT * FROM users WHERE id = '$id'";
	$result1 = mysql_query($search_query,$connect);
	$row=mysql_fetch_assoc($result1);
	$name=$row['Name'];
	$email=$row['Email'];
	$mobile=$row['Mobile'];
	$gender=$row['Gender'];
	$profession=$row['Profession'];
	$language=$row['Language'];
	$dob=$row['DOB'];

?>