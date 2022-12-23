<?php
// Include configuration file 
require 'config.php';

    $pageview = $_GET['getID']; 
	$selectproduct =mysqli_query($conn, "SELECT * from booking where booking_number = '$pageview' ");
    $rowproduct =mysqli_fetch_array($selectproduct,MYSQLI_ASSOC); 			
			
    $payment_id = $statusMsg = '';
    $ordStatus = 'error';

    $session_id = $_GET['session_id'];
    $sql = "UPDATE booking SET checkout_session_id = '$session_id', status = 'approved' WHERE booking_number = '$pageview' ";
    $result = $conn->query($sql);


// Check whether stripe checkout session is not empty
if(!empty($_GET['session_id'])){
    $session_id = $_GET['session_id'];
    
    // Fetch transaction data from the database if already exists
    $sql = "SELECT * FROM booking WHERE checkout_session_id = '".$session_id."'";
    $result = $conn->query($sql);
	if ( !empty($result->num_rows) && $result->num_rows > 0) {
        $orderData = $result->fetch_assoc();
        
        $paymentID = $orderData['id'];
        $transactionID = $orderData['booking_number'];
        $paidAmount = $orderData['price'];
        $paymentStatus = $orderData['status'];
        $paymentEmail = $orderData['email'];
        $paymentName = $orderData['name'];
        
        $ordStatus = 'success';
        $statusMsg = 'Your Payment has been Successful!';
    }else{
        // Include Stripe PHP library 
        require_once 'stripe-php-master/init.php';
        
        // Set API key
        \Stripe\Stripe::setApiKey(STRIPE_API_KEY);
        
        // Fetch the Checkout Session to display the JSON result on the success page
        try {
            $checkout_session = \Stripe\Checkout\Session::retrieve($session_id);
        }catch(Exception $e) { 
            $api_error = $e->getMessage(); 
        }
        
        if(empty($api_error) && $checkout_session){
            // Retrieve the details of a PaymentIntent
            try {
                $intent = \Stripe\PaymentIntent::retrieve($checkout_session->payment_intent);
            } catch (\Stripe\Exception\ApiErrorException $e) {
                $api_error = $e->getMessage();
            }
            
            // Retrieves the details of customer
            try {
                // Create the PaymentIntent
                $customer = \Stripe\Customer::retrieve($checkout_session->customer);
            } catch (\Stripe\Exception\ApiErrorException $e) {
                $api_error = $e->getMessage();
            }
            
            if(empty($api_error) && $intent){ 
                // Check whether the charge is successful
                if($intent->status == 'succeeded'){
                    // Customer details
                    $name = $customer->name;
                    $email = $customer->email;
                    
                    // Transaction details 
                    $transactionID = $intent->id;
                    $paidAmount = $intent->amount;
                    $paidAmount = ($paidAmount/100);
                    $paymentStatus = $intent->status;
                    
					 // Insert transaction data into the database 
                    
					$sql = "INSERT INTO sales(name,email,title,booking_number,paid_amount,status) VALUES('".$name."','".$email."','".$rowproduct['title']."','".$rowproduct['booking_number']."','".$rowproduct['price']."','".$rowproduct['status']."',NOW(),NOW())"; 
					
                    $insert = $conn->query($sql);
                    $paymentID = conn->insert_id;
                    
						$ordStatus = 'success';
						$statusMsg = 'Your Payment has been Successful!';
                   
                }else{
                    $statusMsg = "Transaction has been failed!";
                }
            }else{
                $statusMsg = "Unable to fetch the transaction details! $api_error"; 
            }
            
            $ordStatus = 'success';
        }else{
            $statusMsg = "Transaction has been failed! $api_error"; 
        }
    }
}else{
	$statusMsg = "Invalid Request!";
}


?>

<!DOCTYPE html>
	<html lang="en" class="no-js">
	<head>
        <?php
			include("navbar.php")
			?> 

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

			
			<section class="">
				<div class="container col-lg-4">
					<br><br>
					<div class="row d-flex justify-content-center" style="background-color: rgb(5, 5, 5);">
						<div class="col-md-10 text-center mb-5 align-items-center">
							<br><img src="img/payment.png" alt="">
						</div><br>
					</div>
					<div class="row d-flex justify-content-center" style="background-color: rgb(243, 245, 250);">
						<div class="col-md-12 col-lg-10">
					
							<div class="login-wrap p-4 p-lg-5">
								<div class="d-flex align-items-center">
									<div class="w-100">
										<h3 class="mb-4" style="font-size:30px" class="<?php echo $ordStatus; ?>"><?php echo $statusMsg; ?></h3>
									</div>
								</div>
                                <div class="wrapper">
                                    <?php if(!empty($paymentID)){ ?>
                                        <h4>Payment Information</h4><br>
                                        <p><b>Reference Number:</b> <?php echo $paymentID; ?></p>
                                        <p><b>Booking No.:</b> <?php echo $transactionID; ?></p>
                                        <p><b>Paid Amount: RM</b> <?php echo $paidAmount; ?></p>
                                        <p><b>Payment Status:</b> <?php echo $paymentStatus; ?></p>
                                        <br>
                                        <h4>Product Information</h4><br>
                                        <p><b>Name:</b> <?php echo $rowproduct['title']; ?></p>
                                        <p><b>Price: RM</b> <?php echo $rowproduct['price']; ?></p>
                                    <?php } ?>
                                        <a href="booking.php" name="send_email" class="btn-link">Back to Product Page</a>
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