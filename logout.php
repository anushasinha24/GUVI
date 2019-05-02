<?php
// Starting session
	session_start();

	//Destroying session
	session_unset(); 
	session_destroy(); 
	header("Location: index.php");
?>