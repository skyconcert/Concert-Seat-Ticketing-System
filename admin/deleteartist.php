<?php 
//header("Location:index.php");
$aid = $_GET['aid'];
include "dbcon.php";

$sql= "DELETE FROM artist WHERE aid='$aid'";

$result = mysql_query($sql);

if($result) //success  
	   {
			Print '<script>alert("Data Successfully Deleted !");</script>'; 
			Print '<script>window.location.assign("viewartist.php");</script>'; 
	   }
		else //unsuccess  
		{
			//mysqli_rollback($connection);

			Print '<script>alert("Data Failed to Delete !");</script>'; 
			Print '<script>window.location.assign("editartist.php");</script>'; 		
		}

?>