<?php 
//header("Location:index.php");
$tid = $_GET['tid'];
$bid = $_GET['bid'];
$cid = $_GET['cid'];
include "dbcon.php";

$sql= "DELETE FROM ticket WHERE tid='$tid' AND bid='$bid' AND coid='$cid'";

$result=mysql_query($sql);

if($result) //success  
	   {
			Print '<script>alert("Data Successfully Deleted !");</script>'; 
			Print '<script>window.location="payment.php?bid='.$bid.'&cid='.$cid.'";</script>'; 
	   }
		else //unsuccess  
		{
			//mysqli_rollback($connection);

			Print '<script>alert("Data Failed to Delete !");</script>'; 
			Print '<script>window.location="payment.php?bid='.$bid.'&cid='.$cid.'";</script>'; 		
		}

?>