<?php include 'dbcon.php'; ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO artist (aid, aname, company, phone, address) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['aid'], "int"),
                       GetSQLValueString($_POST['aname'], "text"),
                       GetSQLValueString($_POST['company'], "text"),
                       GetSQLValueString($_POST['phone'], "text"),
                       GetSQLValueString($_POST['address'], "text"));

  mysql_select_db($database_dbcon, $connection);
  $Result1 = mysql_query($insertSQL, $connection) or die(mysql_error());
  
  $insert1SQL = sprintf("INSERT INTO concert_artist (coid,aid) VALUES (%s, %s)",
                       GetSQLValueString($_POST['coid'], "int"),
                       GetSQLValueString($_POST['aid'], "int"));

  mysql_select_db($database_dbcon, $connection);
  $Result2 = mysql_query($insert1SQL, $connection) or die(mysql_error());
  
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Add Artist</title>
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
  
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>

<!----->

</head>
<body>
<?php include 'dbcon.php';?>
<div id="wrapper">
     <!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="index.html">Sky Concert</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>	
			</section>
			<form class=" navbar-left-right">
              <input type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
              <input type="submit" value="" class="fa fa-search">
            </form>
    <div class="clearfix"> </div>
           </div>
     
 
		           
		        
			<div class="clearfix">
       
     </div>
	  
		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
				
                    <li>
                        <a href="viewprofile.php" class=" hvr-bounce-to-right" style="background-color:#E6E6FA"><i class="fa fa-user nav_icon "></i><span class="nav-label">Profile</span> </a>
                    </li>
                   
                    <li>
                        <a href="#" class=" hvr-bounce-to-right" style="background-color:#E6E6FA"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">View</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
							<li><a href="viewdata.php" class=" hvr-bounce-to-right" style="background-color:#FFE4E1"><i class="fa fa-users nav_icon"></i>Admin & Staff</a></li>
							<li><a href="viewconcert.php" class=" hvr-bounce-to-right" style="background-color:#FFE4E1"><i class="fa fa-volume-up nav_icon"></i>Concert</a></li>
							<li><a href="viewseat.php" class=" hvr-bounce-to-right" style="background-color:#FFE4E1"><i class="fa fa-file-text-o nav_icon"></i>Seat</a></li>
							<li><a href="viewartist.php" class=" hvr-bounce-to-right" style="background-color:#FFE4E1"> <i class="fa fa-copy nav_icon"></i>Artist</a></li>
                            <li><a href="calendar.php" class=" hvr-bounce-to-right" style="background-color:#FFE4E1"> <i class="fa fa-calendar nav_icon"></i>Calendar</a></li>
                            <li><a href="viewbooking.php" class=" hvr-bounce-to-right" style="background-color:#FFE4E1"><i class="fa fa-book nav_icon"></i>Booking</a></li>
							<li><a href="viewticket.php" class=" hvr-bounce-to-right" style="background-color:#FFE4E1"><i class="fa fa-ticket nav_icon"></i>Ticket</a></li>
					   </ul>
                    </li>
					<li>
                        <a href="#" class=" hvr-bounce-to-right" style="background-color:#E6E6FA"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Insert</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
							<li><a href="addartist.php" class=" hvr-bounce-to-right" style="background-color:#FFE4E1"><i class="fa fa-users nav_icon"></i>Artist</a></li>
							<li><a href="addconcert.php" class=" hvr-bounce-to-right" style="background-color:#FFE4E1"><i class="fa fa-volume-up nav_icon"></i>Concert</a></li>
					   </ul>
                    </li>
					 <li>
                        <a href="signup.html" class=" hvr-bounce-to-right" style="background-color:#E6E6FA"><i class="fa fa-user-plus nav_icon" ></i> <span class="nav-label">Register Staff</span> </a>
                    </li>
					 <li>
                        <a href="logout.php" class=" hvr-bounce-to-right" style="background-color:#E6E6FA"><i class="fa fa-sign-out nav_icon" ></i> <span class="nav-label">Logout</span> </a>
                    </li>
                    
                </ul>
            </div>
			</div>
        </nav>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Add Artist</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
	
 	<div class="grid-form" >
 		<div class="grid-form1" >
 		<h3 id="forms-example" class="" align="center" >Add Artist<img src="images/edit2.png" alt="ADMIN" class="ADMIN" width="140" height="140"></h3>
 		<form action="<?php echo $editFormAction; ?>" method="post" name="form1" onSubmit="return check()">

		<?php
		mysql_select_db($database_dbcon, $connection);
		$query_concert = "SELECT * FROM artist";
		$concert = mysql_query($query_concert,  $connection) or die(mysql_error());
		$row_concert = mysql_fetch_assoc($concert);
		$total_concert = mysql_num_rows($concert);
									$idd=$total_concert+1;
		?>
		
		
		<div class="form-group">
			<label>Artist ID</label>
			<input type="text" class="form-control1" placeholder="<?php echo $idd; ?>" readonly>
		  </div>
		
		<div class="form-group">
			<label>Concert</label>
			<?php
$sql = "SELECT * FROM concert";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);

echo "<select class='form-control round-form' id='coid' name='coid' <option value = '0'>Select the related concert ID</option>";
while ($row = mysql_fetch_array($result)) {
if ($row['coid'] == $search_user['coid']) {
    $selectCurrent=' selected';
echo '<option value="'.$search_user['coid'].'"  '.$selectCurrent.'>'.$search_user['name'].'</option>';
}
else
 {
echo "<option value='" . $row['coid'] ."'>" . $row['name'] ."  </option>";
  }
 }
 echo "</select>"; ?>
		  </div>
		
		  <div class="form-group">
			<label>Artist Name</label>
			<input type="text" class="form-control1" id="aname" name="aname" required>
		  </div>
		  
		  		  
		    <div class="form-group">
			<label>Company</label>
			<input type="text" class="form-control1" id="company" name="company" required>
		  </div>
		  

		   <div class="form-group">
			<label>Contact Number</label>
			<input type="text" class="form-control1" id="phone" name="phone" required>
		  </div>
		  
		   <div class="form-group">
			<label>Address</label>
			<input type="text" class="form-control" name="address" id="address" required>
		  </div>
		  
		  
		   <div class="form-group" align="center">
			<input type="submit" value="INSERT" class="btn btn-primary">
			<input type="hidden" name="aid" id="aid" value="<?php echo $idd;?>">
		  </div>
		  
		  
<input type="hidden" name="MM_insert" value="form2">
		</form>
  </div>
 	</div>
 	<!--//grid-->
		<!---->
<div class="copy">
          <p> &copy; Concert Ticketing System by <a href="" target="_blank">SKYCONCERT</a> </p>	    
		  </div>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     <!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
<!---->
  <script>
		
	function check() {
    var r = confirm("Are you sure?");
    if (r) {
	   alert("Data has been successfully added!");
       window.location.href = 'addartist.php';
	   return true;
    }
	else
	{return false;}
}

  </script>
</body>
</html>

