<?php 
include "dbcon.php";

$aid = $_GET['aid']; 
$aname = $_POST['aname']; 
$company = $_POST['company']; 
$phone = $_POST['phone']; 
$address = $_POST['address']; 


$sql= "update artist set aid='$aid', aname='$aname', company='$company', phone='$phone', address='$address' where aid='$aid'";

$results=mysql_query($sql);


if($results )
{
	//mysql_commit($connection);
	print '<script>alert("Data Successsfully Updated!");</script>';
	print '<script>window.location.assign("viewartist.php");</script>';
}
else
{
	print '<script>alert("Data Unsuccesssfully Updated!");</script>';
	print '<script>window.location.assign("editartist.php");</script>';
}
?>
