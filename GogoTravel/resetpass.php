<!doctype html>
<html lang="en">
  <head>
  	<title>Reset Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    include 'config.php';
    
    // verify email
    if (isset($_POST["verify_email"]))
    {
        $email = $_POST["email"];
        $_SESSION['email'] = $email;
        $newverification_code = $_POST["verification_code"];
 
        // connect with database
        $conn = mysqli_connect("localhost", "root", "", "sd_g01_03");
 
        // mark email as verified
        $sql = "UPDATE user SET email_verified_at = NOW() WHERE email = '" . $email . "' AND verification_code = '" . $verification_code . "'";
        $result  = mysqli_query($conn, $sql);
 
        if (mysqli_affected_rows($conn) == 0)
        {
            header("location:resetpassconfirm.php");
        }else
 
        echo "<p>You can login now.</p>";
        exit();
    }

?>
	<section class="section-gap">
		<div class="container col-lg-4 ">
			<div class="row d-flex justify-content-center" style="background-color: rgb(5, 5, 5);">
				<div class="col-md-6 text-center mb-4">
                    <label class="label" for="text"></Code></label>
					<h2 class="heading-section" style="color : rgb(235, 226, 226)">Password Reset</h2>
				</div>
			</div>
                <div class="row d-flex justify-content-center" style="background-color: rgb(243, 245, 250);">
                    <div class="col-md-12 col-lg-7">
                        <form class="verification-form" method="POST">
                                <div class="form-group mb-4">  
                                </div>
                                <div class="form-group mb-3">
                                    <p class=fz-18 for="text">We have sent a verification code to your email for password reset.</p>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="text">Please refer to your e-mail for further password recovery.</label>
                                    
                                </div>
    
                        </form>
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
