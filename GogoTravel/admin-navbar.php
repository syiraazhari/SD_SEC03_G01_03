<?php
session_start();
include("db_conn.php");
if(isset($_POST['login'])) {
  $email = $_POST['email'];  
  $password = $_POST['password'];
  //to prevent from mysqli injection  
  if($email === "Admin@gmail.com" && $password === "123") {
    $_SESSION['email'] = $email;
  } else {
    $email= stripcslashes($email);
    $password = stripcslashes($password);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $sql = "select * from user where email = '$email' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
  
    if($count == 1){
      $_SESSION['email'] = $email;
      $_SESSION['id'] = $row['id'];
    }
  }
} 
else if (isset($_POST['logout'])) {
  session_destroy();
  session_start();
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
									<li><a href="admin-services.php">Service</a></li>
									<li><a href="staffcont.php">Staff</a></li>	
									<!-- Dropdown -->
                                    
                                    <?php
                                    if(isset($_SESSION["email"])){
								    echo "<li class='dropdown'>
								      <a class='dropdown-toggle' href='#' id='navbardrop' data-toggle='dropdown'>
								        Log-in
								      </a>
								      <div class='dropdown-menu'>
								        <a class='dropdown-item' href='generic.html'>Generic</a>
								        <a class='dropdown-item' href='elements.html'>Elements</a>
								      </div>
								    </li>";
                                    }
                                    else {
                                      echo" <li><a href='login.php'>Login</a></li>";
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