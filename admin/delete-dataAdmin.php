<?php 
//header("Location:index.php");
$aid = $_GET['aid'];
include "dbcon.php";

$sql= "DELETE FROM admin WHERE aid='$aid'";

$result = mysql_query($sql);

if($result) //success  
	   {
			Print '<script>alert("Data Successfully Deleted !");</script>'; 
			Print '<script>window.location.assign("viewdata.php");</script>'; 
		}
		else //unsuccess  
		{

			Print '<script>alert("Data Failed to Delete !");</script>'; 
			Print '<script>window.location.assign("viewdata.php");</script>'; 		
		}

?>