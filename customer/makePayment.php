	<?php
	include ('dbcon.php');

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
			<div id="content-wrapper">

        <div class="container-fluid">
      <div class="container">
      <div class="card card-register mx-auto mt-4">
        <div class="card-header">Make Payment !</div>
        <div class="card-body">
                   <form action="" method="post">
                   <div class="form-group">
				   

					<div class="form-label-group">
					 <label for="gN">Add Ticket</label>
						<br>
						<br>
						<?php
						echo "<td><a class=\"btn btn-primary\" href=\"getTicket.php?bid=" . $book['bid'] . "&cid=" . $concert['coid'] ."\">Book Me &nbsp;!</a></td>";
						?>
                    </div>
					<br>
				    <div class="form-label-group">
					 <label for="gN">Make Payment</label>
						<br>
						<br>
						<?php
						echo "<td><a class=\"btn btn-primary\" href=\"payment.php?bid=" . $book['bid'] . "&cid=" . $concert['coid'] ."\">Make Payment &nbsp;!</a></td>";
						?>
                    </div>
				 
                   

				   </div>
					<br>
					<br>

                        <div class="p-t-10">
						<label for="gN">Cancel Booking Ticket</label>
                            <br>
							 <input type="submit" value="Cancel" name="submit" />
                        </div>
						<br>
						<br>
                    </form>
				   
                </table>
				<br>
				
              </div>
            </div>
			</header>
			</div>
			
			<?php
	    if(isset($_POST["submit"]))
	   {
		
			$delete = "DELETE FROM ticket WHERE bid='$bid' AND coid='$cid'";
		    $sql=mysql_query($delete);
			
			if($sql) 
			{
				echo "<script type= 'text/javascript'>alert('You already cancel the booking!');</script>";
				mysql_close($connection);
		       echo "<script language= 'JavaScript'>window.location = 'index.php';</script>";
			} 
			else 
			{
				echo "<script type= 'text/javascript'>alert('Error: " . $delete . "<br>" . mysql_error()."');</script>";
			}
		
		}
		?>
	    
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
