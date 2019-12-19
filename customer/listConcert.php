	<?php
	 include('dbcon.php');
	
	$query_concertView = "SELECT * FROM concert WHERE date >= CURDATE()";
	$concertView = mysql_query($query_concertView);

	$bid = $_GET['bid'];
	$query_bView = "SELECT * FROM booking WHERE bid='$bid'";
	$bView = mysql_query($query_bView);
	$book = mysql_fetch_assoc($bView);
	extract($book);
	?>
	
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Event Asia</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">=
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link href="css/availability-calendar.css" rel="stylesheet">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			<!-- Start Header Area -->
			<header class="default-header">
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="#home"><img src="img/newlogo2.png" alt="" height="100"></a>
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									<a href="#home">Home</a>
									<a href="#speaker">Artists</a>
									<a href="#upcoming">Upcoming event</a>
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							
                           
                            </div>
						</div>
					</div>
					 
				</div>
			<div>
			<center>
			<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              List of Concert</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      
                      <th>Name</th>
                      <th>Date</th>
					  <th>Start Time</th>
					  <th>End Time</th>
					  <th>Artist</th>
					  <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      
                      <th>Name</th>
                      <th>Date</th>
					  <th>Start Time</th>
					  <th>End Time</th>
					  <th>Artist</th>
					  <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
				  <?php
					while ($concert = mysql_fetch_assoc($concertView)) {
						extract($concert);
						
						echo "<html>
						<tr>
						  
						  <td>" . $concert['name'] . "</td>
						  <td>" . $concert['date'] . "</td>
						  <td>" . $concert['start_time'] . "</td>
						  <td>" . $concert['end_time'] . "</td>";
							echo "<td><a class=\"btn btn-primary\" href=\"listArtist.php?cid=" . $concert['coid'] . "&bid=" . $book['bid'] ."\">See Artist</a></td>";
						
							echo "<td><a class=\"btn btn-primary\" href=\"getTicket.php?cid=" . $concert['coid'] . "&bid=" . $book['bid'] ."\">Book Me &nbsp;!</a></td>";
						echo "</tr></html>"; } ?>
                  </tbody>
                </table>
              </div>
            </div>
			</header>
			</div>
			<!-- End Header Area -->
		
			
			
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/availability-calendar.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/parallax.min.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script src="js/countdown.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/main.js"></script>
		</body>
	</html>
