	<?php
	include ('dbcon.php');

   
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
				     <?php
					 $query_cust = "SELECT * FROM customer";
					$cust = mysql_query($query_cust);
					$rCust = mysql_fetch_assoc($cust);
					$tCust = mysql_num_rows($cust);
					$totalCust = $tCust + 1;
				    
				    ?>
					 <div class="form-label-group">
					    <label for="cuid" >Customer ID</label>
						<input type="text" name="cuid" id="cuid" class="form-control" maxlength="12" disabled="disabled" value="<?php  echo $totalCust; ?>">
					</div>   
					 <div class="form-label-group">
					 <label for="name">Name</label>
						<input type="text" name="name" id="name" class="form-control" maxlength="100" placeholder="Name" required="required">
						
                    </div>
					 <div class="form-label-group">
					 <label for="birthdate">Birthdate</label>
						<input type="date" name="birthdate" id="birthdate" class="form-control"  placeholder="Birthdate" required="required">
						
                    </div>
                     <div class="form-label-group">
					 <label for="email">Email</label>
						<input type="email" name="email" id="email" class="form-control" maxlength="100" placeholder="Email" required="required">
						
                    </div>
					<div class="form-label-group">
					    <label for="phone">Phone Number</label>
						<input type="text"  name="phone" id="phone" class="form-control" maxlength="14" type="text" placeholder="Phone">
						
                    </div>
					<div class="form-label-group">
					    <label for="address">Address</label>
						<input type="text" name="address" id="address" class="form-control" maxlength="255" placeholder="Address" >

                  
               
                       
                        <div class="p-t-10">
                            <br>
                             
							 
							 
							 <input type="submit" value="Submit" name="submit" />
							 
							 <input type="reset" value="Reset" name="reset"/>
							 
                        </div>
                    </form>
				   
                </table>
				<br>
				<a class="btn btn-primary" href="listConcert.php">Back</a>
						 </div>
             
            </div>
			</header>
			</div>
		

					</div>
				</div>
			</section>
			<!-- End speaker Area -->

			<?php
	    
		    include ('dbcon.php');
			if(isset($_POST["submit"])) 
			{
				if(mysql_error()) 
				{
					die("Connection failed: " .mysql_error());
				}
			
			$add = "INSERT INTO customer (cuid, name, birthdate, address, phone, email) VALUES ('".$totalCust."','".$_POST["name"]."', '".$_POST["birthdate"]."', '".$_POST["address"]."', '".$_POST["phone"]."', '".$_POST["email"]."')";
			
			$sql = mysql_query($add);
		       if($sql)
				{
					//mysqli_commit($connection);
					print '<script>alert("Successfully Added !");</script>';
					$cuid=$totalCust;
		
					session_start();
					unset($_SESSION['custID']);
					session_destroy();
					echo'<html><script>window.location="contBook.php?id='.$cuid.'";</script></html>';
				}
				else
				{
					//mysqli_rollback($connection);
					print '<script>alert("Unsuccessfully Added !");</script>';
					print '<script>window.location.assign("cust.php");</script>';
				}
			}
	
	?>

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
