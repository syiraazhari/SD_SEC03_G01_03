<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	use PHPMailer\PHPMailer\SMTP;

	require 'vendor/autoload.php';
	require 'config.php';

	if(isset($_POST['forgotpass'])){
		$email = $_POST['email'];

		$select = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

        while($row=mysqli_fetch_array($select))
        {  
            $staff_fullname=$row[2];
            $staff_username=$row[1];  
            $staff_password=$row[3];  
            $staff_email=$row[4];  
        }

		$code = uniqid(true);
		$query = mysqli_query($conn, "INSERT INTO resetpassword(email, reset_code) VALUES('$email', '$code')");

		$reset_link = "localhost/SD_SEC03_G01_03/GogoTravel/resetpassconfirm.php?code=".$code;
		$message = file_get_contents("forgotpass_template.php");
		$message = str_replace("resetlink","{$reset_link}",$message);
		$message = str_replace("placeholder","{$staff_username}",$message);

		if(!$query){
			exit("error");
		}

		//Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);
		$mail -> AddEmbeddedImage('img/reset.png','trademark');
		$mail -> AddEmbeddedImage('img/email.png','logo');


        try {
            //Enable verbose debug output
            $mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;
 
            //Send using SMTP
            $mail->isSMTP();
 
            //Set the SMTP server to send through
            $mail->Host = 'smtp.gmail.com';
 
            //Enable SMTP authentication
            $mail->SMTPAuth = true;
 
            //SMTP username
            $mail->Username = 'sdgroup1gogotravel@gmail.com';
 
            //SMTP password
            $mail->Password = 'zvfoiwrwqrkxxqoz';
 
            //Enable TLS encryption;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
 
            //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            $mail->Port = 587;
 
            //Recipients
            $mail->setFrom('sdgroup1gogotravel@gmail.com', 'Gogo Travel');
 
            //Add a recipient
            $mail->addAddress($email);
 
            //Set email format to HTML
            $mail->isHTML(true);
 
            $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

            $mail->Subject = 'Password Reset';
            $mail->Body    = $message; //"<p>Your password reset link is: <a href=localhost/SD_SEC03_G01_03/GogoTravel/resetpassconfirm.php?code=$code> HERE</a>";
 
            $mail->send();

			header("location:resetpass.php");
            // echo 'Message has been sent';
 
            // connect with database
            //$conn = mysqli_connect("localhost", "root", "", "sd_g01_03");
	

			//$sql = "INSERT INTO user (name, username, password, email, verification_code) VALUES ('$name', '$username' , '$password', '$email', '$verification_code')";
			
			//if ($conn->query($sql)===true){
			//	header("location:resetpass.php");
			//} else{
			//	die(mysqli_error($conn));
			//}

		}catch (Exception $e){
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	}
	

?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Forgotten Password</title>
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

	<section class="section-gap">
		<div class="container col-lg-3">
			<div class="row d-flex justify-content-center" style="background-color: rgb(5, 5, 5);">
				<div class="col-md-6 text-center mb-3 align-items-center">
					<h2 img src="cid:trademark" class="heading-section" style="color : rgb(235, 226, 226)"><br>Password Reset</h2>
				</div>
			</div>
			<div class="row d-flex justify-content-center" style="background-color: rgb(243, 245, 250);">
				<div class="col-md-12 col-lg-10">
			
					<div class="login-wrap p-4 p-lg-5">
			            <div class="d-flex align-items-center">
			      		    <div class="w-100">
			      			    <h3 class="mb-4">Enter your e-mail</h3>
			      		    </div>
			      	    </div>
					    <form action="forgotpass.php" class="signin-form" method="POST">
							<div class="form-group mb-3">
			      			    <label class="label" for="name">E-mail</label>
			      			    <input name="email" type="email" class="form-control" placeholder="E-mail" required>
			      		    </div>
		                    <div class="form-group mb-3">
		            	        <button name="forgotpass" type="submit" class="form-control btn btn-primary submit px-3">Next</button>
		                    </div>
		                </form>	                
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