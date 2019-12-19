<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Booking Details</title>
<style type="text/css">
body,td,th {
  font-family: Courier New, sans-serif;
  font-size:14px;
}
#footer1 {
  position: absolute;
  height: 60px;
  width: 780px;
  bottom: 70px;
}
#footer2 {
  position: absolute;
  height: 60px;
  width: 100%;
  bottom: 20px;
}
#table1 td{
border-width:thin;
border-style:solid; 
}
</style>
</head>

<body>


<?php 
	include "dbcon.php";
	$bid = $_GET['bid'];
	$sql = "SELECT * FROM  BOOKING, CUSTOMER, PAYMENT,TICKET WHERE CUSTOMER.CUID=BOOKING.CUID AND BOOKING.BID=PAYMENT.BID AND BOOKING.BID='$bid'";
	$results = mysql_query($sql);
	$row = mysql_fetch_assoc($results);

?> 
<table>
	<tr><td align="center"><font size="4"><b>SKY CONCERT TICKETING SYSTEM</b></font></td></tr>
	<tr><td align="center">___________________________________________________________________________________</td></tr>
</table>
<br>
<br>

<table width="650">
<tr align="center">
  <td align="center"><font size="7"><b><i>Order Summary</i></b></font></td><br>
</tr>
<tr>
  <td height="20"><font size="5">
    <p><b>Booking ID : </b><?php echo $row['bid']?> </p>
    <p>&nbsp;</p>
    <p><b>Booking Date: </b><?php echo $row['date']?> </p>
  </font><p>&nbsp;</p></td>
</tr>
</table>
<br>
<table width="650" border="1" cellspacing="0" id="table1" style="text-align:center">
  <tr>
    <td height="50" width="200" bgcolor="#89c8bd"><font color="white"><b>Customer ID : </b></font></td>
    <td><?php echo $row['cuid']?></td>
  </tr>
  <tr>
    <td height="50" bgcolor="#89c8bd"><font color="white"><b>Customer Name : </b></font></td>
    <td><?php echo $row['name']?></td>
  </tr>
   <tr>
    <td height="50" bgcolor="#89c8bd"><font color="white"><b>Phone : </b></font></td>
    <td><?php echo $row['phone']?></td>
  </tr>
  <tr>
    <td height="50" bgcolor="#89c8bd"><font color="white"><b>Address : </b></font></td>
    <td> <?php echo $row['address']?></td>
  </tr>
    <tr>
    <td height="50" bgcolor="#89c8bd"><font color="white"><b>Payment ID :</b></font></td>
    <td> <?php echo $row['pid']?></td>
  </tr>
    <tr>
    <td height="50" bgcolor="#89c8bd"><font color="white"><b>Ticket ID :</b></font></td>
    <td> <?php echo $row['tid']?></td>
  </tr>
  <tr>

</table>

<div id="footer2">
<table>
  <tr><td align="center">___________________________________________________________________________________</td></tr>
    <tr><td align="center"><font size="3"><b>SKYCONCERT.COM</b></font></td></tr>
    <tr><td align="center"><font size="3">WEBSITE : www.skyconcert.com | TEL : 03-8028337</font></td></tr>
</table>
</div>

</div>

</body>
</html>