<!DOCTYPE html>
	<html lang="en" class="no-js">
	<head>

		<link rel="shortcut icon" href="img/fav.png">
		<meta charset="UTF-8">
		<title>Gogo Travel</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/transition.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		</head>
		<body>
			<?php
			include ("navbar.php");	 
			include ("config.php");   
		  ?>
			

			<section class="default-banner active-blog-slider">
					<div class="item-slider relative" style="background: url(img/slider1.jpg);background-size: cover;">
						<div class="overlay" style="background: rgba(0,0,0,.3)"></div>
						<div class="container">
							<div class="row fullscreen justify-content-center align-items-center">
								<div class="col-md-10 col-12">
									<div class="banner-content text-center"> <!-- Advertisement 1 -->
										<?php 
											$sql = "SELECT * FROM advert WHERE package_id= '1'";
											$result = mysqli_query($conn, $sql);
									
											while($row=mysqli_fetch_array($result))
											{  $package_id=$row[0];  $title=$row[1];  $info=$row[2];  $price=$row[3];  $memo=$row[4];}     
										?>
										<h4 class="text-white mb-20 text-uppercase"><?php echo $title ?></h4>
										<h1 class="text-uppercase text-white"><?php echo $info, $price ?></h1>
										<p class="text-white"><?php echo $memo ?>. </p>
										<a href="signin.php" class="text-uppercase header-btn">Discover Now</a>
									</div>
								</div>

							</div>
						</div>
					</div>

					
					<div class="item-slider relative" style="background: url(img/slider2.jpg);background-size: cover;">
						<div class="overlay" style="background: rgba(0,0,0,.3)"></div>
						<div class="container">
							<div class="row fullscreen justify-content-center align-items-center">
								<div class="col-md-10 col-12">
									<div class="banner-content text-center">
										<?php 
											$sql = "SELECT * FROM advert WHERE package_id= '2'";
											$result = mysqli_query($conn, $sql);
									
											while($row=mysqli_fetch_array($result))
											{  $package_id=$row[0];  $title=$row[1];  $info=$row[2];  $price=$row[3];  $memo=$row[4];}     
										?>
										<h4 class="text-white mb-20 text-uppercase"><?php echo $title ?></h4>
										<h1 class="text-uppercase text-white"><?php echo $info, $price ?></h1>
										<p class="text-white"><?php echo $memo ?>. </p>
										<a href="signin.php" class="text-uppercase header-btn">Discover Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item-slider relative" style="background: url(img/slider3.jpg);background-size: cover;">
						<div class="overlay" style="background: rgba(0,0,0,.3)"></div>
						<div class="container">
							<div class="row fullscreen justify-content-center align-items-center">
								<div class="col-md-10 col-12">
									<div class="banner-content text-center">
										<?php 
											$sql = "SELECT * FROM advert WHERE package_id= '3'";
											$result = mysqli_query($conn, $sql);
									
											while($row=mysqli_fetch_array($result))
											{  $package_id=$row[0];  $title=$row[1];  $info=$row[2];  $price=$row[3];  $memo=$row[4];}     
										?>
										<h4 class="text-white mb-20 text-uppercase"><?php echo $title ?></h4>
										<h1 class="text-uppercase text-white"><?php echo $info, $price ?></h1>
										<p class="text-white"><?php echo $memo ?>. </p>
										<a href="signin.php" class="text-uppercase header-btn">Discover Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/slick.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/waypoints.min.js"></script>		
			<script src="js/main.js"></script>	
		</body>
	</html>