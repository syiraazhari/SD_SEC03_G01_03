<?php
	include("config.php")
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Sign Up</title>
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
		if(isset($_POST['signup'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			$name = $_POST['name'];

			$sql = "INSERT INTO user (name, username, password, email ) VALUES ('$name', '$username' , '$password', '$email')";
			
			if ($conn->query($sql)===true){
				header("location:signin.php");
			} else{
				die(mysqli_error($conn));
			}
		}
		?>

	<section class="section-gap">
		<div class="container col-lg-3">
			<div class="row d-flex justify-content-center" style="background-color: rgb(5, 5, 5);">
				<div class="col-md-6 text-center mb-3 align-items-center">
					<h2 class="heading-section" style="color : rgb(235, 226, 226)">Create An Account</h2>
				</div>
			</div>
			<div class="row d-flex justify-content-center" style="background-color: rgb(243, 245, 250);">
				<div class="col-md-12 col-lg-10">
			
					<div class="login-wrap p-4 p-lg-5">
			            <div class="d-flex align-items-center">
			      		    <div class="w-100">
			      			    <h3 class="mb-4">Sign Up</h3>
			      		    </div>
			      	    </div>
					    <form action="signup.php" class="signin-form" method="POST">
                            <div class="form-group mb-3">
			      			    <label class="label" for="name">Full Name</label>
			      			    <input name="name" type="text" class="form-control" placeholder="Full Name as per NRIC" required>
			      		    </div>
                            <div class="form-group mb-3">
			      			    <label class="label" for="name">Date of Birth</label>
			      			    <input name="dob" type="date" class="form-control" placeholder="D.O.B" required>
			      		    </div>
			      		    <div class="form-group mb-3">
			      			    <label class="label" for="name">Username</label>
			      			    <input name="username" type="text" class="form-control" placeholder="Username" required>
			      		    </div>
		                    <div class="form-group mb-3">
		            	         <label class="label" for="password">Password</label>
		                         <input name="password" type="password" class="form-control" placeholder="Password" required>
		                    </div>
                            <div class="form-group mb-3">
			      			    <label class="label" for="name">E-mail</label>
			      			    <input name="email" type="email" class="form-control" placeholder="E-mail" required>
			      		    </div>
		                    <div class="form-group mb-3">
		            	        <button name="signup" type="submit" class="form-control btn btn-primary submit px-3">Next</button>
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