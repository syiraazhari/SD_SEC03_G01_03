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

		</head>
		<body>
			<?php  

                include 'navbar.php';
                include 'config.php';  
				$id = $_SESSION['id'];

				$select = mysqli_query($conn, "SELECT * FROM `user` WHERE id = '$id'") or die('query failed');
					if(mysqli_num_rows($select) > 0){
						$fetch = mysqli_fetch_assoc($select);
				}

				$name = $fetch['name'];
				$email = $fetch['email'];


                $select_query="SELECT * FROM booking WHERE email='$email'";
				$result = mysqli_query($conn, $select_query);

                while($row=mysqli_fetch_array($result))
				{  $package_id=$row[3];  $title=$row[4]; $price=$row[6];  $book_no=$row[5];}   

			
            ?> 


			
			<section class="">
				<div class="container col-lg-4">
					<br><br>
					<div class="row d-flex justify-content-center" style="background-color: rgb(5, 5, 5);">
						<div class="col-md-10 text-center mb-3 align-items-center">
							<img src="img/payment.png" alt="">
						</div><br><br>
					</div>
					<div class="row d-flex justify-content-center" style="background-color: rgb(243, 245, 250);">
						<div class="col-md-12 col-lg-10">
					
							<div class="login-wrap p-4 p-lg-5">
								<div class="d-flex align-items-center">
									<div class="w-100">
										<h3 class="mb-4" style="font-size:30px">Payment Details</h3>
									</div>
								</div>

								<form action="payment_done.php" class="payment" method="POST">
									<div class="form-group mb-4">
										<label class="label" for="name">Full Name</label><br>
										<b style="font-size:20px"><?php echo $name; ?> </b>
									</div>
									<div class="form-group mb-4">
										<label class="label" for="email">E-mail</label><br>
										<b style="font-size:20px"><?php echo $email; ?> </b>
									</div>
									<div class="form-group mb-4">
										<label class="label" for="name">Package ID</label><br>
										<b style="font-size:20px"><?php echo $package_id; ?> </b>
									</div>
									<div class="form-group mb-4">
										<label class="label" for="name">Package Name</label><br>
										<b style="font-size:20px"><?php echo $title; ?> </b>
									</div>
									<div class="form-group mb-4">
										<label class="label" for="name">Booking No.</label><br>
										<b style="font-size:20px"><?php echo $book_no;?> </b>
									</div>
									<div class="form-group mb-4">
										<label class="label" for="name">Price (RM)</label><br>
										<b style="font-size:20px">RM<?php echo $price; ?>.00</b>
									</div>
									</div>
                                    <div id="paypal-payment-button"></div>
									<div class="form-group mb-4">
								</form>	                
							</div>
						</div>
					</div>
				</div>
			</section>

			<script src="https://www.paypal.com/sdk/js?client-id=AQyzlnM1RriJ0IQD2G1TYTfkD93MoHUfs8p3U6ta9sUymH7IByliREUG1JT84jVxXpJ62jHfxnjCgbEp&disable-funding=credit,card"></script>
    		<script src="index.js"></script>
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