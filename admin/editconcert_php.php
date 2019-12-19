<?php 
include "dbcon.php";

$coid = $_GET['coid']; 
$name = $_POST['name']; 
$date = $_POST['date']; 
$start_time = $_POST['start_time']; 
$end_time = $_POST['end_time']; 


$sql= "update concert set coid='$coid', name='$name', date='$date', start_time='$start_time', end_time='$end_time' where coid='$coid'";

$results=mysql_query($sql);


if($results )
{
	//mysql_commit($connection);
	print '<script>alert("Data Successsfully Updated!");</script>';
	print '<script>window.location.assign("viewconcert.php");</script>';
}
else
{
	print '<script>alert("Data Unsuccesssfully Updated!");</script>';
	print '<script>window.location.assign("editconcert.php");</script>';
}
?>
