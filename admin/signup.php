<?php
	
		$aid = $_POST['aid'];
		$name = $_POST['name'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		$userlevel = $_POST['userlevel'];
		

    	include "dbcon.php";
	
    	if(mysql_error())
    	{
			echo "Failed to connect to MYSQL".mysql_error();
		}

    	$sql= "INSERT INTO admin( aid, name, password, phone, userlevel) VALUES ('$aid', '$name', '$password', '$phone', '$userlevel')";

		$results=mysql_query($sql);

		if($results)
		{
			//mysqli_commit($connection);
			print '<script>alert("Successfully Added !");</script>';
			print '<script>window.location.assign("viewdata.php");</script>';
		}
		else
		{
			//mysqli_rollback($connection);
			print '<script>alert("Unsuccessfully Added !");</script>';
			print '<script>window.location.assign("signup.html");</script>';
		}
?>
		