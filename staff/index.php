<?php
if( isset($_POST['aid']) and isset($_POST['password']) ) {
		include('dbcon.php');
		$aid=$_POST['aid'];
		$password=$_POST['password'];
 
		$ret=mysql_query("SELECT * FROM admin WHERE aid='$aid' AND password='$password' ") or die("Could not execute query: " .mysql_error($connection));
		$row = mysql_fetch_assoc($ret);
		$check = $row['userlevel'];
		//$popup = $row['name'];
		$uid = $row['aid'];
		$upass = $row['password'];
		$test='Admin';
		
		if(!$row) {
			header("Location: index.php");
		}
		else {
			if($aid===$uid&&$password===$upass)
			{
	        session_start();
	        $_SESSION['admin']=$aid;
			if($check==$test)
			{
			  header('location: viewprofile.php');
			}
			else
			{
			  header('location: viewprofile.php'); 
			}
			}
		}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Login For Staff</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
</head>
<body>
	<form name="form1" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
	<div class="login">
		<h1><a href="" target="blank_">Staff <img src="images/admin2.png" alt="ADMIN" class="ADMIN" width="140" height="140"></a></h1>
		<div class="login-bottom">
			<h2>Login</h2>
			<div class="col-md-6">
				<div class="login-mail">
					<input type="text" id="aid" name="aid" placeholder="Enter your ID" required="" >
					<i class="fa fa-key"></i>
				</div>
				<div class="login-mail">
					<input type="password" id="password" name="password" placeholder="Enter your password" required="">
					<i class="fa fa-lock"></i>
				</div>
			</div>
			<div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" name="login" value="Login">
					</label>
					<p>Back To Main Menu</p>
				<a href="index.php" class="hvr-shutter-in-horizontal">Back</a>
			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>
	</div>
		<!---->
			<div class="copy-right">
            <p> &copy; Concert Ticketing System by <a href="" target="_blank">SKYCONCERT</a> </p>	    
			</div>  
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

