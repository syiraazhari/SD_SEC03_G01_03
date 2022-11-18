<?php 
  session_start(); 
  include 'login_config.php';
  $id = $_SESSION['id'];
  $username = $_SESSION['username'];
  $usertype = $_SESSION['usertype'];
?>

<link rel="shortcut icon" href="img/fav.png">
		<meta charset="UTF-8">

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
									<li><a href="admin-packages.php">Service</a></li>
									<li><a href="staffcont.php">Staff</a></li>
									<li><a href="view_user.php">User</a></li>	
									<li><a href="view_feedback.php">Feedback</a></li>	
									<!-- Dropdown -->
                                    
									<?php
									if (isset($username)){
										echo "<li class='dropdown'>
										<a class='dropdown-toggle' href='#' id='navbardrop' data-toggle='dropdown'>$username</a>
										<div class='dropdown-menu'>
										  <a class='dropdown-item' href='profileview.php'>Profile</a>
										  <a class='dropdown-item' href='logout.php'>Logout</a>
										</div>
									  </li>";
									}
                                    else {
                                     echo" <li><a href='signin.php'>Sign In</a></li>";
									}
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