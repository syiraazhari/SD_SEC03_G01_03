<?php 
  session_start(); 
  if (!isset($_SESSION['id'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: signin.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user_id']);
    header("location: signin.php");
  }
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

			<!-- start banner Area -->
			<section class="banner-area" id="home">
				<!-- Start Header Area -->
				<header class="default-header">
					<nav class="navbar navbar-expand-lg  navbar-light">
						<div class="container">
							  <a class="navbar-brand" href="main.php">
							  	<img src="img/logo.png" alt="">
							  </a>
							  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							    <span class="text-white lnr lnr-menu"></span>
							  </button>

							  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
							    <ul class="navbar-nav">				
<<<<<<< HEAD
									<li><a href="admin-packages.php">Service</a></li>
									<li><a href="staffcont.php">Users</a></li>	
=======
									<li><a href="admin-services.php">Service</a></li>
									<li><a href="view_users2.php">Users</a></li>	
>>>>>>> b0771092f1b0c2c5a4e7d0c55fb8c31391f47680
									<!-- Dropdown -->
                                    
									<?php
                                    //if($_SESSION['login']==true){
										//$username=$_SESSION['username'];
										echo "<li class='dropdown'>
										<a class='dropdown-toggle' href='#' id='navbardrop' data-toggle='dropdown'>
										</a>
										<div class='dropdown-menu'>
										  <a class='dropdown-item' href='profile.php'>Profile</a>
										  <a class='dropdown-item' href='logout.php'>Logout</a>
										</div>
									  </li>";
                                    //}
                                    //else {
                                     // echo" <li><a href='signin.php'>Login</a></li>";
                                   // }
                                    ?>
							    </ul>
							  </div>						
						</div>
					</nav>
				</header>
				<!-- End Header Area -->				
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