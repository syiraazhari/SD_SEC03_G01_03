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

                $query = "UPDATE booking SET status = 'approved' WHERE email = '$email'";
                $result = mysqli_query($conn, $query);
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
										<h3 class="mb-4" style="font-size:30px">Payment Successful!</h3>
									</div>
								</div>
                                    <a href="booking.php"><button name="book_confirm" class="btn btn-warning">Confirm</button></a>
                                    <a href="printpdf.php"><button class="btn ">Print Invoice</button></a>
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