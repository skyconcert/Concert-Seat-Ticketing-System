<?php
	
		$coid = $_POST['coid'];
		$name = $_POST['name'];
		$date = $_POST['date'];
		$start_time = $_POST['start_time'];
		$end_time = $_POST['end_time'];
		

    	include "dbcon.php";
	
    	if(mysql_error())
    	{
			echo "Failed to connect to MYSQL".mysql_error();
		}

    	$sql= "INSERT INTO concert( coid, name, date, start_time, end_time) VALUES ('$coid', '$name', '$date', '$start_time', '$end_time')";

		$results=mysql_query($sql);

		if($results)
		{
			//mysqli_commit($connection);
			print '<script>alert("Successfully Added !");</script>';
			print '<script>window.location.assign("viewconcert.php");</script>';
		}
		else
		{
			//mysqli_rollback($connection);
			print '<script>alert("Unsuccessfully Added !");</script>';
			print '<script>window.location.assign("addconcert.php");</script>';
		}
?>
		