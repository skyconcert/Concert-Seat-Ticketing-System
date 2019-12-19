          <?php
	 include('dbcon.php');
	
     //get booking 
	
	$bid = $_GET['bid'];
	$query_bookView = "SELECT * FROM booking WHERE bid='$bid'";
	$bookView = mysql_query($query_bookView);
	$book = mysql_fetch_assoc($bookView);
	extract($book);
    
	$cid = $_GET['cid'];
	$query_concertView = "SELECT * FROM concert WHERE coid='$cid'";
	$concertView = mysql_query($query_concertView);
	$concert = mysql_fetch_assoc($concertView);
	extract($concert);
	
	$query_ticketView = "SELECT * FROM ticket t, seat s WHERE t.seat_no=s.seat_no and t.coid='$cid' AND t.bid='$bid'";
	$ticketView = mysql_query($query_ticketView);

	?>
	 


		  <?php
				if(isset($_POST["submit"]))
				{
				
                    include ('dbcon.php');
				  
					$add = "INSERT INTO payment (bid) VALUES ('".$book["bid"]."')";

				    $sql = mysql_query($add);
					
					if($sql) 
					{
						
						echo "<script type= 'text/javascript'>alert('Successfully Get Ticket');</script>";
						
						mysql_close($connection);
						$bid= $book['bid'];
						session_start();
						unset($_SESSION['BID']);
						session_destroy();
						echo'<html><script>window.location="success.php?bid='.$bid.'";</script></html>';	
					}
					else 
					{	
						echo "<script type= 'text/javascript'>alert('Invalid Input');</script>";		
						echo'<html><script>window.location="payment.php?bid='.$bid.'&cid='.$concert['coid'].'";</script></html>';
					}

				}
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
									<a href="cust.php">Booking</a>
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- End Header Area -->

			

			<!-- Start speaker Area -->
			<section class="speaker-area section-gap" id="speaker">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-20 pb-10 header-text">
							<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Payment</div>
            <div class="card-body">
              
	
			  
			  <form action="" method="post">
					 
							<br>
						 
						   <div class="form-label-group">
							 <label for="tid">Booking ID</label>
								<input type="text" name="tid" id="tid" class="form-control" maxlength="12" disabled="disabled" required="required" value="<?php echo $book['bid']?>">	
							</div>
							<br>
							<div class="form-label-group">
							 <label for="cid">Concert Name</label>
								<input type="text" name="cid" id="cid" class="form-control" maxlength="100" disabled="disabled" required="required" value="<?php echo $concert['name']?>">	
							
							</div>
                                <div class="card-body">
								 <div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								  <thead>
									<tr>
									  <th>Ticket ID</th>
									  <th>Seat No</th>
									  <th>Row No</th>
									  <th>Category</th>
									   <th>Entrance Hall</th>
									  <th>Price(RM)</th>
									  <th>Action</th>
									</tr>
								  </thead>
								  <tfoot>
									<tr>
									  <th>Ticket ID</th>
									  <th>Seat No</th>
									  <th>Row No</th>
									  <th>Category</th>
							          <th>Entrance Hall</th>
									  <th>Price(RM)</th>
									  <th>Action</th>
									</tr>
								  </tfoot>
								  <tbody>
								  <?php
								    $sumPrice=0;
									while ($ticket = mysql_fetch_assoc($ticketView)) {
										extract($ticket);
										
										echo "<html>
										<tr>
										  
										  <td>" . $ticket['tid'] . "</td>
										  <td>" . $ticket['seat_no'] . "</td>
										  <td>" . $ticket['row_num'] . "</td>
										  <td>" . $ticket['category'] . "</td>
										  <td>" . $ticket['entrance_hall'] . "</td>
										  <td>" . $ticket['price_seat'] . "</td>";
										  echo "<td align='center'><a class=\"btn btn-primary\" href=\"deleteTicket.php?tid=" . $ticket['tid'] . "&bid=" . $bid . "&cid=" . $cid ."\">DELETE TICKET</a></td>"; 
											 
											 
											 
											 $sumPrice += $ticket['price_seat'];
										echo "</tr></html>"; } ?>
								  </tbody>
								   <tbody>
									<tr>
									   <td colspan="4"></td>
									   
									   
									 <td>TOTAL FEES (RM)</td>
									 
									  <td><?php echo $sumPrice; ?></td>
									  <td></td>
									<tr>
							   </tbody>
								</table>
							 
							
							 
								
						    </div>
							<div class="p-t-10">
									<br>
									
                                     <?php 
					
									
									echo "<td><a class=\"btn btn-primary\" href=\"getTicket.php?cid=" . $concert['coid'] . "&bid=" . $book['bid'] ."\">Add Ticket &nbsp;!</a></td>";
					              ?>
								
							 
									<input type="submit" class="btn btn-primary" value="Make Payment" name="submit" />	
									
							
						        </div>
                         </form>
						 </div>
             
            </div>
			</header>
			</div>
		

					</div>
				</div>
			</section>
			<!-- End speaker Area -->



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
