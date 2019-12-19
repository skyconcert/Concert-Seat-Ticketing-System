
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Update Artist</title>
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
		 $aid = $_GET['aid'];	
		 $query = "SELECT * FROM artist WHERE aid='$aid'";

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
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Artist</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
	
 	<div class="grid-form" >
 		<div class="grid-form1" >
 		<h3 id="forms-example" class="" align="center" >Update Artist<img src="images/edit2.png" alt="ADMIN" class="ADMIN" width="140" height="140"></h3>
 		<form action="editartist_php.php?aid=<?php echo $aid;?>" method="post" name="form1" onSubmit="return editFunction()">

		  <div class="form-group">
			<label>Name</label>
			<input type="text" class="form-control1" id="aname" name="aname" value='<?=$results['aname'];?>'>
		  </div>
		  
		  		  
		    <div class="form-group">
			<label>Company</label>
			<input type="text" class="form-control1" id="company" name="company" value='<?=$results['company'];?>'>
		  </div>
		  

		   <div class="form-group">
			<label>Contact Number</label>
			<input type="text" class="form-control1" id="phone" name="phone" value='<?=$results['phone'];?>'>
		  </div>
		  
		   <div class="form-group">
			<label for="aid">Address</label>
			<input type="text" class="form-control" name="address" id="address" value='<?=$results['address'];?>' required>
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

