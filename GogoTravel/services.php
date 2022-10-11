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
        <h1 align="center"><br><br>Quick View<br><br></h1>  

        <div class="container col-lg-6">
            <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
                <thead>  
        
                <tr>  
                    <th>ID</th>  
                    <th>Full Name</th>
                    <th>Username</th>  
                    <th>Password</th>  
                    <th>Email</th>   
                </tr>  
                </thead>

                <?php  
                
                include 'config.php';
                $sql = "SELECT * FROM user WHERE usertype = 'staff'";
                $result = mysqli_query($conn, $sql);

                while($row=mysqli_fetch_array($result))
                {  
                    $user_id=$row[0];  
                    $user_fullname=$row[5];
                    $user_username=$row[1];  
                    $user_password=$row[2];  
                    $user_email=$row[3];  
                
                ?>
            
                <tr>
                    <td><?php echo $user_id;  ?></td>  
                    <td><?php echo $user_fullname;  ?></td>
                    <td><?php echo $user_username;  ?></td>  
                    <td><?php echo $user_password;  ?></td>  
                    <td><?php echo $user_email;  ?></td>   
                </tr>
            <?php } ?>
            </table>
            </div>
        </div>
        </body>
    </div>                
</html>