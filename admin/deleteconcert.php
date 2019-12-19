<?php 
//header("Location:index.php");
$coid = $_GET['coid'];
include "dbcon.php";

$sql= "DELETE FROM concert WHERE coid='$coid'";

$result = mysql_query($sql);

if($result) //success  
	   {
			Print '<script>alert("Data Successfully Deleted !");</script>'; 
			Print '<script>window.location.assign("viewconcert.php");</script>'; 
	   }
		else //unsuccess  
		{
			//mysqli_rollback($connection);

			Print '<script>alert("Data Failed to Delete !");</script>'; 
			Print '<script>window.location.assign("editconcert.php");</script>'; 		
		}

?>