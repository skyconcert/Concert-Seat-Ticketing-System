
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Update Seat</title>
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
<?php
		 include "dbcon.php";
		 $seat_no = $_GET['seat_no'];	
		 $query = "SELECT * FROM seat WHERE seat_no='$seat_no'";

		 $r = mysql_query($query);
		 
		 $results = mysql_fetch_assoc($r);
?>
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
				<a href="index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Update Seat</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
	
 	<div class="grid-form" >
 		<div class="grid-form1" >
 		<form action="editseat_php.php?seat_no=<?php echo $seat_no;?>" method="post" name="form1" onSubmit="return editFunction()">

		  <div class="form-group">
			<label for="seat_no">Seat Number</label>
			<br>
			<select name="seat_no" id="seat_no" required>-Choose-
				<option value="<?php echo $results['seat_no'];?>">-<?php echo $results['seat_no'];?>-</option>
				
				<option value="V1">V1</option>
				<option value="V2">V2</option>
				<option value="V3">V3</option>
				<option value="V4">V4</option>
				<option value="V5">V5</option>
				<option value="V6">V6</option>
				<option value="V7">V7</option>
				<option value="V8">V8</option>
				<option value="V9">V9</option>
				<option value="V10">V10</option>
				<option value="M1">M1</option>
				<option value="M2">M2</option>
				<option value="M3">M3</option>
				<option value="M4">M4</option>
				<option value="M5">M5</option>
				<option value="M6">M6</option>
				<option value="M7">M7</option>
				<option value="M8">M8</option>
				<option value="M9">M9</option>
				<option value="M10">M10</option>
				<option value="B1">B1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
				<option value="B4">B4</option>
				<option value="B5">B5</option>
				<option value="B6">B6</option>
				<option value="B7">B7</option>
				<option value="B8">B8</option>
				<option value="B9">B9</option>
				<option value="B10">B10</option>	
			</select>
		  </div>
		  
		  		  
		    <div class="form-group">
			<label for="row_num">Row Number</label>
			<br>
			<select name="row_num" id="row_num" required>-Choose-
				<option value="<?php echo $results['row_num'];?>">-<?php echo $results['row_num'];?>-</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
		  </div>
		  

		   <div class="form-group">
			<label for="category">Category</label>
			<br>
			<select name="category" id="category" required>-Choose-
				<option value="<?php echo $results['category'];?>">-<?php echo $results['category'];?>-</option>
				<option value="VIP">VIP</option>
				<option value="MIDDLE">MIDDLE</option>
				<option value="BACK">BACK</option>
			</select>
		  </div>
		  
		   <div class="form-group">
			<label for="aid">Price Seat</label>
			<input type="text" class="form-control" name="price_seat" id="price_seat" placeholder="Price Seat" value='<?=$results['price_seat'];?>' required>
		  </div>
		  
		   <div class="form-group">
			<label for="entrance_hall">Entrance Hall</label>
			<br>
			<select name="entrance_hall" id="entrance_hall" required>-Choose-
				<option value="<?php echo $results['entrance_hall'];?>">-<?php echo $results['entrance_hall'];?>-</option>
				<option value="E1">E1</option>
				<option value="E2">E2</option>
			</select>
		  </div>
		  
		   <div class="form-group" align="center">
			<input type="submit" value="UPDATE" class="btn btn-primary">
		  </div>
		  
		  

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
		
	function editFunction() 
	{
	
		var r = confirm("Are you sure you want to edit?");
		if (r) 
		{
			return true;
		}
		else
		{return false;}
	}
  </script>
</body>
</html>

