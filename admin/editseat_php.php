<?php 
include "dbcon.php";

$seat_no = $_GET['seat_no']; 
$row_num = $_POST['row_num']; 
$category = $_POST['category']; 
$price_seat = $_POST['price_seat']; 
$entrance_hall = $_POST['entrance_hall']; 


$sql= "update seat set seat_no='$seat_no', row_num='$row_num', 	category='$category', price_seat='$price_seat', entrance_hall='$entrance_hall' where seat_no='$seat_no'";

$results=mysql_query($sql);


if($results )
{
	//mysql_commit($connection);
	print '<script>alert("Data Successsfully Updated!");</script>';
	print '<script>window.location.assign("viewseat.php");</script>';
}
else
{
	print '<script>alert("Data Unsuccesssfully Updated!");</script>';
	print '<script>window.location.assign("editseat.php");</script>';
}
?>
