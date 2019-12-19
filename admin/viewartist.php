
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Artist Information</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!--<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />--> 
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
			   <form action="allcategory.php" method="post" name="search" class="search-wrap">
			               <div class="form-group">
			                 <td> <input type="text" id="myInput" onkeyup="myFunction()" class="form-control search" placeholder="Search by Name">
			                 <script>
								function myFunction() 
								{
								  var input, filter, table, tr, td, i;
								  input = document.getElementById("myInput");
								  filter = input.value.toUpperCase();
								  table = document.getElementById("seat");
								  tr = table.getElementsByTagName("tr");
								  for (i = 0; i < tr.length; i++) 
								  {
									td = tr[i].getElementsByTagName("td")[1];
									if (td) 
									{
									  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) 
									  {
										tr[i].style.display = ""; 
									  } 
									  else 
									  {
										tr[i].style.display = "none";
									  }
									}       
								  }
								}
								</script></td>
			               </div>
			            </form>
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
	<br>
	<div class="banner" style="width: 95%;overflow: auto; height: 420px;">
	
	<br>
	
	<table border="1" align="center" width="1000" id="seat" color="#fff2e6">
		<tr>
		<th height="50" style="text-align:center; background-color:#90EE90"><font color="white">No</font></th>
		<th height="50" style="text-align:center; background-color:	#90EE90"><font color="white">ID</font></th>
		<th style="text-align:center; background-color:#90EE90"><font color="white">Artist Name</font></th>
		<th style="text-align:center; background-color:#90EE90"><font color="white">Company</font></th>
		<th style="text-align:center; background-color:#90EE90"><font color="white">Phone</font></th>
		<th style="text-align:center; background-color:#90EE90"><font color="white">Address</font></th>
		<th style="text-align:center; background-color:#90EE90"><font color="white">Update</font></th>
		<th style="text-align:center; background-color:#90EE90"><font color="white">Delete</font></th>
		</tr>
<?php
	include "dbcon.php";
	$sql = "SELECT * FROM ARTIST";
	$count=1;
	$result = mysql_query($sql);
	while($row = mysql_fetch_assoc($result))
	{
        Print '<tr align="center" color="#fff2e6">
				  <td height="60">'.$count.'</td>
                  <td height="60">'.$row['aid'].'</td>
                  <td>'.$row['aname'].'</td>
				  <td>'.$row['company'].'</td>
				  <td>'.$row['phone'].'</td>
				  <td>'.$row['address'].'</td>
				  <td width="80"><a href="editartist.php?aid='.$row['aid'].'"><img src="images/edit.jpg" width="23" height="23"></a></td>
                  <td width="80"><a href="deleteartist.php?aid='.$row['aid'].'"><img src="images/delete.jpg" width="23" height="23"></a></td>
				</tr>';	
				$count=$count+1;
	}
$totalartist=$count-1;
echo "</table>";
echo "&nbsp;";
echo"</br>'";
echo"<h5 align='center'><b>Total Artist : $totalartist </b></h5>";
?>
</div>
<br>
 	<!--//grid-->
		<!---->
<div class="copy">
          <p> &copy; Concert Ticketing System by <a href="" target="_blank">SKYCONCERT</a> </p>	    
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
			
	  <script>
		
	function editFunction() 
	{
	
		var r = confirm("Are you sure you want to delete?");
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

