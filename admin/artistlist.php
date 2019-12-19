<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Artist Details</title>
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
	$coid = $_GET['coid'];
	$sql = "SELECT * FROM CONCERT WHERE COID='$coid'";
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
  <td align="center"><font size="7"><b><i>Artist List</i></b></font></td><br>
</tr>
<tr>
  <td height="20"><font size="5">
    <p><b>Concert ID : </b><?php echo $row['coid']?> </p>
    <p>&nbsp;</p>
	<p><b>Concert Name: </b><?php echo $row['name']?> </p>
  </font><p>&nbsp;</p>
    <p><b>Concert Date: </b><?php echo $row['date']?> </p>
  </font><p>&nbsp;</p>
 </td>
</tr>
</table>
<br>

<?php 

include "dbcon.php";
$coid = $_GET['coid'];
$sql1 = "SELECT * FROM ARTIST A JOIN CONCERT_ARTIST CA ON CA.AID=A.AID JOIN CONCERT C ON CA.COID=C.COID WHERE CA.COID='$coid'";
	$result1 = mysql_query($sql1);

	$row=mysql_num_rows($result1);
if($row<1)
{
	Print'
		<table width="650" border="1" cellspacing="0" id="table1" style="text-align:center">
		  <tr>
			<td height="50" width="200"><font color="black"><b>No record is found!</b></font></td>
		  </tr>
		 
		</table><br>';
}
else{
	while($row1 = mysql_fetch_assoc($result1))
	{

		Print'
			<table width="650" border="1" cellspacing="0" id="table1" style="text-align:center">
			  <tr>
				<td height="50" width="200" bgcolor="#89c8bd"><font color="white"><b>Artist ID : </b></font></td>
				<td>'.$row1['aid'].'</td>
			  </tr>
			  <tr>
				<td height="50" bgcolor="#89c8bd"><font color="white"><b>Artist Name : </b></font></td>
				<td>'.$row1['aname'].'</td>
			  </tr>
			   <tr>
				<td height="50" bgcolor="#89c8bd"><font color="white"><b>Company : </b></font></td>
				<td>'.$row1['company'].'</td>
			  </tr>
			  <tr>
				<td height="50" bgcolor="#89c8bd"><font color="white"><b>Contact Number : </b></font></td>
				<td>'.$row1['phone'].'</td>
			  </tr>
				<tr>
				<td height="50" bgcolor="#89c8bd"><font color="white"><b>Address :</b></font></td>
				<td>'.$row1['address'].'</td>
			  </tr>
			  <tr>

			</table><br>';
	}
}

?>

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