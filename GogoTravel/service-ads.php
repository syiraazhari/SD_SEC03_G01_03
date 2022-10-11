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
  
<?php

    include 'config.php';

    if(isset($_POST['add_ads'])){
        $title = $_POST['title'];
        $price = $_POST['price'];
        $memo = $_POST['memo'];
        
    $conn = mysqli_connect("localhost", "root", "", "sd_g01_03");
    $sql = "INSERT INTO advert (title, price, memo) VALUES ('$title', '$price' , '$memo')";

        if ($conn->query($sql)===true){
            header("location:admindash.php");
        } else{
            die(mysqli_error($conn));
        }
    }
?>

<body>  
  
<div class="table-scrol">  
    
        <!-- Start feature Area -->
        <section class="feature-area" id="secvice">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10"><br>Advertisement Tab</h1>
                            <p>Add, update and edit advertisements here.</p>
                        </div>
                    </div>
                </div>		

            <form action="service-ads.php" class="signin-form" method="POST">				
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10 ">
                        <div class="single-feature mb-30">
                            <div class="title d-flex flex-row pb-20 ">
                                <span class="lnr lnr-paperclip"></span>
                                <h2><a href="#">Advertisement</a></h2>
                            </div>
                            <div>
                                    <label class="col-md-3">Title:</label>
                                    <input type="text" id="title" name="title" class="form-control" placeholder="Advert Title"required>
                            </div>	
                            <div>
                                    <label class="col-md-3"><br>Price:</label>
                                    <input type="number" id="price" name="price" class="form-control" placeholder="Advert Price" required>
                            </div>	
                            <div>
                                    <label class="col-md-6"><br>Memo:</label>
                                    <input style="height:200px" type="text" id="memo" name="memo" class="form-control" placeholder="Advert Short Description"required>
                            </div>	
                            <div class="col-md-8">
                                <br>
                                <input type="submit" class="btn btn-primary" name="add_ads" value="Save ">
                                <br><br>
                            </div>					
                        </div>							
                    </div>			            													
                </div>
            </form>	
            </div>	
        </section>
        <!-- End feature Area -->       
</html>