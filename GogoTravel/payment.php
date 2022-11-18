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
			<script src="https://js.stripe.com/v3/"></script>

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


				$unique = uniqid(true);
				$book_no = "GGTB".$unique;

                $select_id=$_GET['book_package'];  
                $select_query="SELECT * FROM packages WHERE package_id='$select_id'";
				$result = mysqli_query($conn, $select_query);

                while($row=mysqli_fetch_array($result))
				{  $package_id=$row[0];  $title=$row[1];  $info=$row[3];  $price=$row[2];  $memo=$row[4];}   


				
					$query = "INSERT INTO booking(name, email, package_id, title, booking_number, price) VALUES('$name', '$email', '$package_id', '$title', '$book_no', '$price')";
					$book_result = mysqli_query($conn, $query);
				
			
            ?> 


			
			<section class="">
				<div class="container col-lg-4">
					<br><br>
					<div class="row d-flex justify-content-center" style="background-color: rgb(5, 5, 5);">
						<div class="col-md-10 text-center mb-5 align-items-center">
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
								<div id="paymentResponse"></div>

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
									<div class="form-group mb-4">
									<button id="payButton" name="payButton" class="btn btn-warning">Confirm</button>
									</div>   
								</form>	   					    
							</div>
						</div>
					</div>
				</div>
			</section>
			<script>
					var buyBtn = document.getElementById('payButton');
					var responseContainer = document.getElementById('paymentResponse');    
					// Create a Checkout Session with the selected product
					var createCheckoutSession = function (stripe) {
						return fetch("payment_done.php", {
							method: "POST",
							headers: {
								"Content-Type": "application/json",
							},
							body: JSON.stringify({
								checkoutSession: 1,
								Name:"<?php echo $title; ?>",
								ID:"<?php echo $book_no; ?>",
								Price:"<?php echo $price; ?>",
								Currency:"myr",
							}),
						}).then(function (result) {
							return result.json();
						});
					};

					// Handle any errors returned from Checkout
					var handleResult = function (result) {
						if (result.error) {
							responseContainer.innerHTML = '<p>'+result.error.message+'</p>';
						}
						buyBtn.disabled = false;
						buyBtn.textContent = 'Buy Now';
					};

					// Specify Stripe publishable key to initialize Stripe.js
					var stripe = Stripe('<?php echo STRIPE_PUBLISHABLE_KEY; ?>');

					buyBtn.addEventListener("click", function (evt) {
						buyBtn.disabled = true;
						buyBtn.textContent = 'Please wait...';
						createCheckoutSession().then(function (data) {
							if(data.sessionId){
								stripe.redirectToCheckout({
									sessionId: data.sessionId,
								}).then(handleResult);
							}else{
								handleResult(data);
							}
						});
					});
					</script>


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