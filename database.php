<?php
	$mysqlport = getenv('S2G_MYSQL_PORT');
	$dbhost = "localhost";
	$dbuser = 'root';
	$dbpass = '';
	$connect = mysql_connect($dbhost, $dbuser, $dbpass);
	
	mysql_select_db("guvi");
?>