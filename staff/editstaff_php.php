<?php 

$aid = $_GET['aid'];
$name = $_POST['name'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$userlevel = $_POST['userlevel'];

include "dbcon.php";

$sql= "update admin set aid='$aid', name='$name', password='$password', phone='$phone', userlevel='$userlevel' where aid='$aid'";

$results=mysql_query($sql);


if($results )
{
	//mysqli_commit($connection);
	print '<script>alert("Data Successsfully Updated!");</script>';
	print '<script>window.location.assign("viewprofile.php");</script>';
}
else
{
	print '<script>alert("Data Unsuccesssfully Updated!");</script>';
	print '<script>window.location.assign("editstaff.php");</script>';
}
?>
