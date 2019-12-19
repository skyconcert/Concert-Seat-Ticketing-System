	<?php
	 include('dbcon.php');
	
     //get booking 
	$bid = $_GET['bid'];
	$query_bookView = "SELECT * FROM booking WHERE bid='$bid'";
	$bookView = mysql_query($query_bookView);
	$book = mysql_fetch_assoc($bookView);
	extract($book);
	//get concert
	$cid = $_GET['cid'];
	$query_concertView = "SELECT * FROM concert WHERE coid='$cid'";
	$concertView = mysql_query($query_concertView);
	$concert = mysql_fetch_assoc($concertView);
	//extract($concert);
	?>
	 

          <?php
				if(isset($_POST["submit"]))
				{
				
                    include ('dbcon.php');
				  
					$add = "INSERT INTO ticket (bid, coid, seat_no) VALUES ('".$book["bid"]."' , '".$concert["coid"]."', '".$_POST['seat_no']."')";

				    $sql= mysql_query($add);
					if($add) 
					{
						
						echo "<script type= 'text/javascript'>alert('Successfully Get Ticket');</script>";
						
						
						$bid= $book['bid'];
						$coid= $concert['coid'];
						session_start();
						unset($_SESSION['BID']);
						unset($_SESSION['COID']);
						session_destroy();
						echo'<html><script>window.location="makePayment.php?bid='.$bid.'&cid='.$coid.'";</script></html>';
		 		
					}
					else 
					{	
						echo "<script type= 'text/javascript'>alert('Invalid Input');</script>";
						echo'<html><script>window.location="getTicket.php?cid='.$coid.'&bid='.$bid.'";</script></html>';
						
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
						<div class="col-md-10 pb-10 header-text">
							<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
             Get Seat</div>
           
		   <center>
		   <div class="card-body">
              
	   
			  
			   <form action="" method="post">
					   <div class="form-group">
								<img src="img/seats.jpg" style="width:440px;height:320px;">
							<br>
							<br>
							<br>
							<div class="form-label-group">
							 <label for="bid">Booking ID</label>
								<input type="text" name="bid" id="bid" class="form-control" maxlength="100" disabled="disabled" required="required" value="<?php echo $book['bid']?>">	
							</div>
							<br>
							
							<br>
							<div class="form-label-group">
							 <label for="cid">Concert Name</label>
								<input type="text" name="cid" id="cid" class="form-control" maxlength="100" disabled="disabled" required="required" value="<?php echo $concert['name']?>">	
							
							</div>
	                         <br>
							 <div class="form-label-group">
							 <label for="tid">Get Seat</label>
								<align="center">
								<?php
					
					          
									$sql= mysql_query("SELECT seat_no, row_num, category, price_seat FROM seat WHERE seat_no NOT IN (SELECT seat_no FROM ticket WHERE coid='$cid')");
									if($result=mysql_num_rows($sql))
									{
									$select= '<select name="seat_no">';
										while($rs=mysql_fetch_array($sql)){
											  $select.='<option value="'.$rs['seat_no'].'">'.$rs['seat_no'].'&nbsp; ('.$rs['category'].' - RM'.$rs['price_seat'].')</option>';
										  }
									}
									$select.='</select>';
									echo $select;
									
							  ?>
							<align="center">
							  </div>
							
							 
								<div class="p-t-10">
									<br>
									 <input type="submit" class="btn btn-primary" value="Get Seat" name="submit" />
									 
									
									 <a class="btn btn-primary" href="index.php">Main Page</a>
							</div>
							<br>
							<br>
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
