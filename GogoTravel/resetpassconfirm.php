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

    $code = $_GET["code"];
    $getEmailQuery = mysqli_query($conn, "SELECT email from resetpassword WHERE reset_code = '$code'");

    if(isset($_POST['change_password'])){


            $cpassword = $_POST["cpassword"];
            $cpassword = md5($cpassword);
    
            // connect with database
            $conn = mysqli_connect("localhost", "root", "", "sd_g01_03");
    
            // mark email as verified
            $row = mysqli_fetch_array($getEmailQuery);
            $email = $row["email"];

            $query = mysqli_query($conn, "UPDATE user SET password ='$cpassword' WHERE email ='$email'");
    
            if($query){
                header("location:signin.php");
                $query = mysqli_query($conn, "DELETE FROM resetpassword WHERE reset_code ='$code'");
            }
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
                    <div>
                        <form class="change_password" method="POST">
                                <div class="form-group mb-3">
                                    <br>
                                    <label class="label" for="name">New Password</label>
                                    <input name="cpassword" type="password" class="form-control" placeholder="New Password" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="date">Confirm Password</label>
                                    <input name="cpassword" type="password" class="form-control" placeholder="Confirm Password" required>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="form-group col-md-12 col-lg-7">
                                        <button name="change_password" value="Change" type="submit" class="form-control btn btn-primary submit px-3">Verify</button>
                                    </div>
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
