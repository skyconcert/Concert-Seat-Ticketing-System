	<?php
	include ('dbcon.php');

	$id = $_GET['id'];
	$query_custView = "SELECT * FROM customer WHERE cuid='$id'";
	$custView = mysql_query($query_custView);
	$cust = mysql_fetch_assoc($custView);
   // extract($cust);
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
        <div class="card-header">Welcome to SKY CONCERT !</div>
        <div class="card-body">
                   <form action="" method="post">
                   <div class="form-group">
				   
				   <?php
					
					$query_book = "SELECT * FROM booking";
					$book = mysql_query($query_book);
					$rbook = mysql_fetch_assoc($book);
					$tbook = mysql_num_rows($book);
					$totalbook = $tbook +1;
					
					?>

					
					<div class="form-label-group">
					 <label for="bid">Booking ID</label>
						<input type="text" name="bid" id="bid" class="form-control" maxlength="12" disabled="disabled" value="<?php  echo $totalbook;?>">	
                    </div>
					<br>
				 
				   <div class="form-label-group">
					 <label for="cuid">Hello,</label>
						<input type="text" name="cuid" id="cuid" class="form-control" maxlength="100" disabled="disabled"required="required" value="<?php echo $cust['name']?>">	
               
                    </div>
					<br>
					<br>
					 <div class="form-label-group">
					 <label> Are you ready for Concert ?</label>
						
                    </div>
					 
                        <div class="p-t-10">
                            <br>
                             <input type="submit" class="btn btn-primary" value="I'm Ready For Concert" name="submit" />
							 
							
							 <a class="btn btn-primary" href="index.php">I'm not Ready For Concert</a>
                        </div>
						<br>
						<br>
                    </form>
					  <a input type="button" href="cust.php">&nbsp;Back&nbsp;</a>
				   
                </table>
				<br>
				
              </div>
            </div>
			</header>
			</div>
			
	       <?php
		    include ('dbcon.php');
			if(isset($_POST["submit"])) 
			{
				if(mysql_error()) 
				{
					die("Connection failed: " .mysql_error());
				}
			
					$add = "INSERT INTO booking (bid, date, cuid) VALUES ('".$totalbook."', CURDATE() , '".$cust["cuid"]."')";
                    $sql= mysql_query($add);
					   if($sql)
						{
							//mysqli_commit($connection);
							print '<script>alert("Successfully Added !");</script>';
							$bid=$totalbook;
				
							session_start();
							unset($_SESSION['bID']);
							session_destroy();
							echo'<html><script>window.location="listConcert.php?bid='.$bid.'";</script></html>';
						}
					else
					{
						//mysqli_rollback($connection);
						print '<script>alert("Unsuccessfully Added !");</script>';
						echo'<html><script>window.location="contBook.php?id='.$cust['cuid'].'";</script></html>';	
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
