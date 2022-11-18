<?php
    include 'navbar.php';
?>

<!DOCTYPE html>
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Bookings</title>  
</head>
  
<body>  
  
<div class="table-scrol">  
    
        <!-- Start feature Area -->
        <section class="feature-area" id="secvice">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10"><br>Hi there <?php echo $username ?>! Here are your bookings</h1>
                            <p>Get ready for your trip! Fun is about to arrive, Go Go!</p>
                        </div>
                    </div>
                </div>						          
            </div>	
        </section>
        <!-- End feature Area -->


    <div class="table-scrol">  
        <div class="container col-lg-8">
            <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
                <thead>  
        
                <tr>  
                    <th style="text-align: center" class="col-lg-1">Package ID</th>  
                    <th style="text-align: center" class="col-lg-2">Title</th>
                    <th style="text-align: center" class="col-lg-1">Price (RM)</th> 
                    <th style="text-align: center" class="col-lg-2">Booking No.</th> 
                    <th style="text-align: center" class="col-lg-1">Status</th>   
                    <th style="text-align: center" class="col-lg-1">Action</th>  
                </tr>  
                </thead>

                <?php  
                
                include 'config.php';

                $username = $_SESSION['name'];
                $sql = "SELECT * FROM booking WHERE name= '$username' ";
                $result = mysqli_query($conn, $sql);

                while($row=mysqli_fetch_array($result))
                {  
                    $ref_id = $row[0];
                    $package_id=$row[3];  
                    $title=$row[4];
                    $booking_no=$row[5];
                    $price=$row[6];  
                    $status=$row[7];  
                ?>
            
                <tr>
                    <td style="text-align: center" ><br><?php echo $package_id;  ?></td>  
                    <td><br><?php echo $title;  ?></td>
                    <td style="text-align: center" ><br><?php echo $price;  ?></td>  
                    <td style="text-align: center" ><br><?php echo $booking_no;  ?> <br><br></td> 
                    <td style="text-align: center" ><br><?php echo $status;  ?></td>
                    <td style="text-align: center"><br>
                    <a href="request_email_receipt.php?booking_no=<?php echo $booking_no ?>"><button name="book" class="btn btn-success">E-mail</button></a></td> 
                    
                </tr>


            <?php } ?> 
            </table>
            </div>
        </div>
        </body>
    </div>                
</html>