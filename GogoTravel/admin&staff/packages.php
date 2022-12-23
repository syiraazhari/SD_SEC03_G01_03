<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

    <link rel="shortcut icon" href="img/fav.png">
    <meta charset="UTF-8">
    <title>Packages</title>


    <body>
	    <?php
			include("navbar.php")
		?>

        
        <!-- Start project Area -->
        <section class="project-area" id="project"> <br> <br>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-30 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Travel Packages on the go</h1>
                            <p>Below are dedicated travel packages with one of the cheapest rates <br> you can find around town.</p>
                        </div>
                    </div>
                </div>						
                <div class="row justify-content-center d-flex">
                    <div class="active-works-carousel mt-40 col-lg-8">
                        <div class="item">
                            <img class="img-fluid" src="img/unesco.jpg" alt="">
                            <div class="caption text-center mt-20">
                                <h6 class="text-uppercase">UNESCO World Heritage</h6>
                                <p> Dive deep into these UNESCO lablled spots such as Langkawi Geopark and Gunung Mulu<br> 
                                National Park. Remarkably rocky, tremendously old, and a theater for eye-popping natural spectacles are just one click away.</p>
                            </div>
                        </div>
                        
                        <div class="item">
                            <img class="img-fluid" src="img/city.jpg" alt="">
                            <div class="caption text-center mt-20">
                                <h6 class="text-uppercase">City Lights</h6>
                                <p>Malaysia’s city swagger comes accompanied by nature and history, courtesy of <br> 
                                time-worn temples, kopitiam (traditional coffee houses), and rainforests <br> 
                                almost side by side with high-rise buildings.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="img/histrorical.jpg" alt="">
                            <div class="caption text-center mt-20">
                                <h6 class="text-uppercase">Historical Architectures</h6>
                                <p>Imagine a fascinating confluence of ancient Chinese, Indian and South Asian Muslim cultures, <br> 
                                liberally sprinkled with colonial influence! Our destination experts have traveled high and low <br>
                                in search of unique experiences to bring a slice of authentic history and incredible heritage to your Enchanting Travels tour.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="img/islandhopping.jpg" alt="">
                            <div class="caption text-center mt-20">
                                <h6 class="text-uppercase">Island Hopping</h6>
                                <p>Both sides of Malaysia have soft sandy beaches and snorkel-worthy coves, <br> 
                                from beautiful beaches with great waves to rushing rivers, you can indulge in the best of <br>
                                adventurous water sports in Malaysia that your heart desires of.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
            <br> <br> <br> 
        </section>
        <!-- End project Area -->

        <!-- Package Import -->
        <?php    
          include 'config.php';  

        ?>

        <!-- Start feature Area -->
        <section class="feature-area section-gap" id="secvice">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Highly recommended travel packages</h1>
                            <p>Below are the few best selling travel packages to date.</p>
                        </div>
                    </div>
                </div>						
                <div class="row">
                    <div class="col-lg-4 col-md-6 " > <!-- Column 1 Travel Package -->
                        <div class="single-feature mb-30 " type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#box1">
                            <div class="title d-flex flex-row pb-20" >
                                <span class="lnr lnr-license"></span>
                                <?php 
                                    $sql = "SELECT * FROM packages WHERE package_id= '1'";
                                    $result = mysqli_query($conn, $sql);
                            
                                    while($row=mysqli_fetch_array($result))
                                    {  $package_id=$row[0];  $title=$row[1];  $price=$row[2];  $memo=$row[3];  $duration=$row[4];  $location=$row[5]; $img=$row[6]; }    
                                ?>
                                <h4><a href="#" ><?php echo $title; ?><br> *RM<?php echo $price; ?>* </a></h4>
                            </div>
                            <p>
                                Location: <?php echo $location ?> <br>
                                Duration: <?php echo $duration ?> Days <br>
                                <?php echo $memo ?> <br>
                            </p>
                                <div class="modal fade" id="box1" role="dialog">
                                    <div class="modal-dialog modal-lg ">
                                    
                                    <!-- Modal content-->
                                    <br><br><br><br>
                                    <div class="modal-content text-center">
                                        <div class="modal-header" style="font-size:5px">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="text-center">
                                            <br><br>
                                        <h3 class="modal-title"><p style="font-size:35px" ><?php echo $title; ?></p></h3>
                                        <br>
                                        </div>
                                        <div class="modal-body">
                                        <img class="img-fluid" src="img/cave.jpg" alt="">
                                        <br><br>
                                        <p style="color:black; font-size:15px;">Location: <?php echo $location ?> <br>
                                            Duration: <?php echo $duration ?> Days <br>
                                            <?php echo $memo ?> <br></p>
                                        </div>
                                        <div class="modal-footer">
                                        <a href="payment.php?book_package=<?php echo $package_id ?>"><button name="book" class="btn btn-warning">Book</button></a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div>						
                        </div>							
                    </div>
                    <div class="col-lg-4 col-md-6 "> <!-- Column 2 Travel Package -->
                        <div class="single-feature mb-30" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#box2">
                            <div class="title d-flex flex-row pb-20">
                                <span class="lnr lnr-license"></span>
                                <?php 
                                    $sql = "SELECT * FROM packages WHERE package_id= '2'";
                                    $result = mysqli_query($conn, $sql);
                            
                                    while($row=mysqli_fetch_array($result))
                                    {  $package_id=$row[0];  $title=$row[1];  $price=$row[2];  $memo=$row[3];  $duration=$row[4];  $location=$row[5]; $img=$row[6]; }    
                                ?>
                                <h4><a href="#"><?php echo $title; ?><br> *RM<?php echo $price; ?>* </a></h4>
                            </div>
                            <p>
                                Location: <?php echo $location ?> <br>
                                Duration: <?php echo $duration ?> Days <br>
                                <?php echo $memo ?> <br>
                            </p>				
                                <div class="modal fade" id="box2" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                    
                                    <!-- Modal content-->
                                    <br><br><br><br>
                                    <div class="modal-content text-center">
                                        <div class="modal-header" style="font-size:5px">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="text-center">
                                            <br><br>
                                        <h3 class="modal-title"><p style="font-size:35px" ><?php echo $title; ?></p></h3>
                                        <br>
                                        </div>
                                        <div class="modal-body">
                                        <img class="img-fluid" src="img/sabah.jpg" alt="">
                                        <br><br>
                                        <p style="color:black; font-size:15px;">Location: <?php echo $location ?> <br>
                                            Duration: <?php echo $duration ?> Days <br>
                                            <?php echo $memo ?> <br></p>
                                        </div>
                                        <div class="modal-footer">
                                        <a href="payment.php?book_package=<?php echo $package_id ?>"><button name="book" class="btn btn-warning">Book</button></a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div>					
                        </div>							
                    </div>
                    <div class="col-lg-4 col-md-6 "> <!-- Column 3 Travel Package -->
                        <div class="single-feature mb-30" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#box3">
                            <div class="title d-flex flex-row pb-20">
                                <span class="lnr lnr-license"></span>
                                <?php 
                                    $sql = "SELECT * FROM packages WHERE package_id= '3'";
                                    $result = mysqli_query($conn, $sql);
                            
                                    while($row=mysqli_fetch_array($result))
                                    {  $package_id=$row[0];  $title=$row[1];  $price=$row[2];  $memo=$row[3];  $duration=$row[4];  $location=$row[5]; $img=$row[6]; }    
                                ?>
                                <h4><a href="#"><?php echo $title; ?><br> *RM<?php echo $price; ?>* </a></h4>
                            </div>
                            <p>
                                Location: <?php echo $location ?> <br>
                                Duration: <?php echo $duration ?> Days <br>
                                <?php echo $memo ?> <br>
                            </p>			
                                <div class="modal fade" id="box3" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                    
                                    <!-- Modal content-->
                                    <br><br><br><br>
                                    <div class="modal-content text-center">
                                        <div class="modal-header" style="font-size:5px">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="text-center">
                                            <br><br>
                                        <h3 class="modal-title"><p style="font-size:35px" ><?php echo $title; ?></p></h3>
                                        <br>
                                        </div>
                                        <div class="modal-body">
                                        <img class="img-fluid" src="img/kl.jpg" alt="">
                                        <br><br>
                                        <p style="color:black; font-size:15px;">Location: <?php echo $location ?> <br>
                                            Duration: <?php echo $duration ?> Days <br>
                                            <?php echo $memo ?> <br></p>
                                        </div>
                                        <div class="modal-footer">
                                        <a href="payment.php?book_package=<?php echo $package_id ?>"><button name="book" class="btn btn-warning">Book</button></a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div>						
                        </div>						
                    </div>
                    <div class="col-lg-4 col-md-6 "> <!-- Column 4 Travel Package -->
                        <div class="single-feature mb-30" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#box4">
                            <div class="title d-flex flex-row pb-20">
                                <span class="lnr lnr-license"></span>
                                <?php 
                                    $sql = "SELECT * FROM packages WHERE package_id= '4'";
                                    $result = mysqli_query($conn, $sql);
                            
                                    while($row=mysqli_fetch_array($result))
                                    {  $package_id=$row[0];  $title=$row[1];  $price=$row[2];  $memo=$row[3];  $duration=$row[4];  $location=$row[5]; $img=$row[6]; }    
                                ?>
                                <h4><a href="#"><?php echo $title; ?><br> *RM<?php echo $price; ?>* </a></h4>
                            </div>
                            <p>
                                Location: <?php echo $location ?> <br>
                                Duration: <?php echo $duration ?> Days <br>
                                <?php echo $memo ?> <br>
                            </p>	
                                <div class="modal fade" id="box4" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                    
                                    <!-- Modal content-->
                                    <br><br><br><br>
                                    <div class="modal-content text-center">
                                        <div class="modal-header" style="font-size:5px">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="text-center">
                                            <br><br>
                                        <h3 class="modal-title"><p style="font-size:35px" ><?php echo $title; ?></p></h3>
                                        <br>
                                        </div>
                                        <div class="modal-body">
                                        <img class="img-fluid" src="img/pp.jpg" alt="">
                                        <br><br>
                                        <p style="color:black; font-size:15px;">Location: <?php echo $location ?> <br>
                                            Duration: <?php echo $duration ?> Days <br>
                                            <?php echo $memo ?> <br></p>
                                        </div>
                                        <div class="modal-footer">
                                        <a href="payment.php?book_package=<?php echo $package_id ?>"><button name="book" class="btn btn-warning">Book</button></a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div>								
                        </div>							
                    </div>
                    <div class="col-lg-4 col-md-6 "> <!-- Column 5 Travel Package -->
                        <div class="single-feature mb-30" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#box5">
                            <div class="title d-flex flex-row pb-20">
                                <span class="lnr lnr-license"></span>
                                <?php 
                                    $sql = "SELECT * FROM packages WHERE package_id= '5'";
                                    $result = mysqli_query($conn, $sql);
                            
                                    while($row=mysqli_fetch_array($result))
                                    {  $package_id=$row[0];  $title=$row[1];  $price=$row[2];  $memo=$row[3];  $duration=$row[4];  $location=$row[5]; $img=$row[6]; }    
                                ?>
                                <h4><a href="#"><?php echo $title; ?><br> *RM<?php echo $price; ?>* </a></h4>
                            </div>
                            <p>
                                Location: <?php echo $location ?> <br>
                                Duration: <?php echo $duration ?> Days <br>
                                <?php echo $memo ?> <br>
                            </p>	
                                <div class="modal fade" id="box5" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                    
                                    <!-- Modal content-->
                                    <br><br><br><br>
                                    <div class="modal-content text-center">
                                        <div class="modal-header" style="font-size:5px">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="text-center">
                                            <br><br>
                                        <h3 class="modal-title"><p style="font-size:35px" ><?php echo $title; ?></p></h3>
                                        <br>
                                        </div>
                                        <div class="modal-body">
                                        <img class="img-fluid" src="img/pahang.jpg" alt="">
                                        <br><br>
                                        <p style="color:black; font-size:15px;">Location: <?php echo $location ?> <br>
                                            Duration: <?php echo $duration ?> Days <br>
                                            <?php echo $memo ?> <br></p>
                                        </div>
                                        <div class="modal-footer">
                                        <a href="payment.php?book_package=<?php echo $package_id ?>"><button name="book" class="btn btn-warning">Book</button></a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div>								
                        </div>							
                    </div>
                    <div class="col-lg-4 col-md-6 "> <!-- Column 6 Travel Package -->
                        <div class="single-feature mb-30" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#box6">
                            <div class="title d-flex flex-row pb-20">
                                <span class="lnr lnr-license"></span>
                                <?php 
                                    $sql = "SELECT * FROM packages WHERE package_id= '6'";
                                    $result = mysqli_query($conn, $sql);
                            
                                    while($row=mysqli_fetch_array($result))
                                    {  $package_id=$row[0];  $title=$row[1];  $price=$row[2];  $memo=$row[3];  $duration=$row[4];  $location=$row[5]; $img=$row[6]; }     
                                ?>
                                <h4><a href="#"><?php echo $title; ?><br> *RM<?php echo $price; ?>* </a></h4>
                            </div>
                            <p>
                                Location: <?php echo $location ?> <br>
                                Duration: <?php echo $duration ?> Days <br>
                                <?php echo $memo ?> <br>
                            </p>		
                                <div class="modal fade" id="box6" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                    
                                    <!-- Modal content-->
                                    <br><br><br><br>
                                    <div class="modal-content text-center">
                                        <div class="modal-header" style="font-size:5px">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="text-center">
                                            <br><br>
                                        <h3 class="modal-title"><p style="font-size:35px" ><?php echo $title; ?></p></h3>
                                        <br>
                                        </div>
                                        <div class="modal-body">
                                        <img class="img-fluid" src="img/genting.jpg" alt="">
                                        <br><br>
                                        <p style="color:black; font-size:15px;">Location: <?php echo $location ?> <br>
                                            Duration: <?php echo $duration ?> Days <br>
                                            <?php echo $memo ?> <br></p>
                                        </div>
                                        <div class="modal-footer">
                                        <a href="payment.php?book_package=<?php echo $package_id ?>"><button name="book" class="btn btn-warning">Book</button></a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div>							
                        </div>							
                    </div>																					
                </div>
            </div>	
        </section>
        <!-- End feature Area -->

        
        <!-- Start Video Area -->
        <section class="video-area pt-40 pb-40">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="video-content">
                    <a href="https://www.youtube.com/watch?v=oOQ1SbkU_c4" class="play-btn"><img src="img/play-btn.png" alt=""></a>
                    <div class="video-desc">
                        <h3 class="h2 text-white text-uppercase">Being unique is the preference</h3>
                        <h4 class="text-white">Youtube video will appear in popover</h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start Video Area -->
        
        
        <!-- Start logo Area -->
        <section class="logo-area">
            <div class="container">
                <div class="row">
                    
                </div>
            </div>	
        </section>
        <!-- End logo Area -->
        
                    	
        
        <?php
			include("footer.php")
		?>		


    </body>
</html>