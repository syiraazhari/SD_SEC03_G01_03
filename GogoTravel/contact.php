<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

    <link rel="shortcut icon" href="img/fav.png">
    <meta charset="UTF-8">
    <title>Contact Us</title>

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
		include("navbar.php");

			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\Exception;
			use PHPMailer\PHPMailer\SMTP;

			require 'vendor/autoload.php';

			if(isset($_POST['feedback'])){
				
				$name = $_POST['name'];
				$email = $_POST['email'];
				$subject = $_POST['subject'];
				$message = $_POST['message'];

				//Instantiation and passing `true` enables exceptions
				$mail = new PHPMailer(true);
		
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
					$sender ="Feedback Form"; 
					$mail->setFrom($email, $sender);
		
					//Add a recipient
					$mail->addAddress('sdgroup1gogotravel@gmail.com', 'Gogo Travel');
		
					//Set email format to HTML
					$mail->isHTML(true);
					

					$mail->Subject = $subject;
					$mail->Body    = "<h4> Name: $name </h4>" . "<h4> Email: $email </h4>". "<h4> Feedback: </h4>$message";
		
					$mail->send();
					// echo 'Message has been sent';
		
					// connect with database
					$conn = mysqli_connect("localhost", "root", "", "sd_g01_03");
			

					$sql = "INSERT INTO feedback_form (name, email, subject, message) VALUES ('$name', '$email' , '$subject', '$message')";
					
					if ($conn->query($sql)===true){
						header("location:main.php");
					} else{
						die(mysqli_error($conn));
					}

				}catch (Exception $e){
					echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
				}
			}
	
		?>

			<!-- start contact Area -->		
			<section class="contact-area section-gap" id="contact">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">If you need, Just drop us a line</h1>
								<p>We are extremely happy to serve you with guidance when deciding which Travel Package suits your requirement best. :)</p>
							</div>
						</div>
					</div>										
					<form class="form-area " method="post" class="contact-form text-right">
						<div class="row">	
						<div class="col-lg-6 form-group">
							<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
						
							<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

							<input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
						</div>
						<div class="col-lg-6 form-group">
							<textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
							<button name="feedback" class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
							<div class="alert-msg">								
						</div>
						</div></div>
					</form>						
					
				</div>	
			</section>
			<!-- end contact Area -->	
            			
			<?php
			include("footer.php")
			?>		
			

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