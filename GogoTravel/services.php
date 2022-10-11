<?php
    include 'navbar.php';
?>

<!DOCTYPE html>
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Services</title>  
</head>
  
<body>  
  
<div class="table-scrol">  
    
        <!-- Start feature Area -->
        <section class="feature-area" id="secvice">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10"><br>Services Dashboard</h1>
                            <p>Please choose which section to proceed.</p>
                        </div>
                    </div>
                </div>						
                <div class="row">
                    <div class="col-lg-6 col-md-10 ">
                        <div class="single-feature mb-30">
                            <div class="title d-flex flex-row pb-20">
                                <span class="lnr lnr-paperclip"></span>
                                <h2><a href="service-ads.php">Advertisement</a></h2>
                            </div>
                            <p>
                                Homepage Advertisement. <br>
                                Add, update or remove advertisements here.
                            </p>							
                        </div>							
                    </div>
                    <div class="col-lg-6 col-md-6 ">
                        <div class="single-feature mb-30">
                            <div class="title d-flex flex-row pb-20">
                                <span class="lnr lnr-envelope"></span>
                                <h2><a href="service-packages.php">Travel Packages</a></h2>
                            </div>
                            <p>
                                Travel packages under packages tab. <br>
                                Add, update or remove travel packages here.
                            </p>							
                        </div>							
                    </div>																			
                </div>
            </div>	
        </section>
        <!-- End feature Area -->


    <div class="table-scrol">  
        <h1 align="center"><br><br>Quick View of Packages<br><br></h1>  

        <div class="container col-lg-10">
            <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
                <thead>  
        
                <tr>  
                    <th class="col-lg-1">Package ID</th>  
                    <th>Title</th>
                    <th class="col-lg-1">Price (RM)</th>  
                    <th>Memo</th>  
                    <th class="col-lg-1">Duration (Days)</th>  
                    <th>Location</th>  
                </tr>  
                </thead>

                <?php  
                
                include 'config.php';
                $sql = "SELECT * FROM packages";
                $result = mysqli_query($conn, $sql);

                while($row=mysqli_fetch_array($result))
                {  
                    $package_id=$row[0];  
                    $title=$row[1];
                    $price=$row[2];  
                    $memo=$row[3];  
                    $duration=$row[4];  
                    $location=$row[5];
                
                ?>
            
                <tr>
                    <td><?php echo $package_id;  ?></td>  
                    <td><?php echo $title;  ?></td>
                    <td><?php echo $price;  ?></td>  
                    <td><?php echo $memo;  ?></td> 
                    <td><?php echo $duration;  ?></td>  
                    <td><?php echo $location;  ?></td>
                    <td><a href="delete-packages.php?del_package=<?php echo $package_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->     
                </tr>
            <?php } ?>
            </table>
            </div>
        </div>
        </body>
    </div>                
</html>