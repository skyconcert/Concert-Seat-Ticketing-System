<?php 
//header("Location:index.php");
$seat_no = $_GET['seat_no'];
include "dbcon.php";

$sql= "DELETE FROM seat WHERE seat_no='$seat_no'";

$result = mysql_query($sql);

if($result) //success  
	   {
			Print '<script>alert("Data Successfully Deleted !");</script>'; 
			Print '<script>window.location.assign("viewseat.php");</script>'; 
	   }
		else //unsuccess  
		{
			//mysqli_rollback($connection);

			Print '<script>alert("Data Failed to Delete !");</script>'; 
			Print '<script>window.location.assign("editseat.php");</script>'; 		
		}

?>