<?php
	session_start();

	$mobile = $_POST['Mobile'];
	$gender = $_POST['Gender'];
	$dob = $_POST['DOB'];
	$id = $_SESSION['id'];
	$type = $_POST['type'];
	$language = $_POST['language'];
	$mysqlport = getenv('S2G_MYSQL_PORT');
	$dbhost = "localhost";
	$dbuser = 'root';
	$dbpass = '';
	$connect = mysql_connect($dbhost, $dbuser, $dbpass);
	
	mysql_select_db('guvi');
	$updatequery = "UPDATE users SET Mobile = '$mobile', Gender = '$gender', DOB = '$dob', Profession = '$type', Language = '$language' WHERE ID='$id'";
	
	if(mysql_query($updatequery , $connect))
		$var=1;
	else
		$var=0;
	
	/*for($i=1; $i<=$n; $i++)
	{
		$skillname = $skill[$i];
		$versionused = $version[$i];
		$lastused = $last[$i];
		$expyr = $expy[$i];
		$expmon = $expm[$i];
		echo "$skillname" . " " . "$versionused" . " " . "$lastused" . " " . "$expyr" . " " . "$expmon";
		echo "<br>";
	}*/
	
	
		$selectquery1 = "SELECT * FROM empdetails WHERE id='$id'";
		$result=mysql_query($selectquery1 , $connect);
		$fetch=mysql_fetch_assoc($result);
		$eid=$fetch['id'];
	
	for($i=1; $i<=$n; $i++)
	{
		$skillname = $skill[$i];
		$versionused = $version[$i];
		$lastused = $last[$i];
		$expyr = $expy[$i];
		$expmon = $expm[$i];
		$selectquery2 = "SELECT * FROM skills WHERE skill='$skillname'";
		$result=mysql_query($selectquery2 , $connect);
		$fetch=mysql_fetch_assoc($result);
		$sid=$fetch['skillid'];
		$insertquery2 = "INSERT INTO empskills (skillid, id, version, lastused, expy, expm) VALUES ('$sid', '$eid', '$versionused', '$lastused', '$expyr', '$expmon')";	
		if(mysql_query($insertquery2 , $connect))
			$count = $count + 1;
	}
	if(($var==1)&&($count==$n))
	{
		$_SESSION['error'] = 1;
		header("Location: update.php");
	}
	else if(($var==1)&&($count!=$n))
	{
		$_SESSION['error'] = 2;
		header("Location: update.php");
	}
	else if(($var==1)&&($count==$n))
	{
		$_SESSION['error'] = 3;
		header("Location: update.php");
	}
	else
	{
		$_SESSION['error'] = 4;
		header("Location: update.php");
	}
	mysql_close($connect);
?>