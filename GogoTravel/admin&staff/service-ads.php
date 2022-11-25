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
        $package_id = $_POST['id'];
        $title = $_POST['title'];
        $info = $_POST['info'];
        $price = $_POST['price'];
        $memo = $_POST['memo'];
        
    $conn = mysqli_connect("localhost", "root", "", "sd_g01_03");
    $sql = "INSERT INTO advert (package_id, title, info, price, memo) VALUES ('$package_id', '$title', '$info' , '$price' , '$memo')";

        if ($conn->query($sql)===true){
            header("location:service-ads.php");
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
                                    <label class="col-md-3">Ad ID:</label>
                                    <input type="number" id="id" name="id" class="form-control" placeholder="Advert ID"required>
                            </div>
                            <div>
                                    <label class="col-md-3"><br>Title:</label>
                                    <input type="text" id="title" name="title" class="form-control" placeholder="Advert Title"required>
                            </div>	
                            <div>
                                    <label class="col-md-3"><br>Info:</label>
                                    <input type="text" id="info" name="info" class="form-control" placeholder="Advert Info"required>
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
        
        

        <div class="table-scrol">  
            <h1 align="center"><br><br>Quick View of Advertisement<br><br></h1>  

            <div class="container col-lg-8">
                <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
                    <thead>  
            
                    <tr>  
                        <th style="text-align: center" class="col-lg-1">Advert ID</th>  
                        <th style="text-align: center" class="col-lg-2">Title</th> 
                        <th style="text-align: center" class="col-lg-1">Price</th>  
                        <th style="text-align: center">Memo</th>  
                        <th style="text-align: center" class="col-lg-2">Action</th>  
                    </tr>  
                    </thead>

                    <?php  
                    
                    include 'config.php';
                    $sql = "SELECT * FROM advert";
                    $result = mysqli_query($conn, $sql);

                    while($row=mysqli_fetch_array($result))
                    {  
                        $package_id=$row[0];  
                        $title=$row[1];
                        $info=$row[2];  
                        $price=$row[3];  
                        $memo=$row[4];  
                    
                    ?>
                
                    <tr>
                        <td style="text-align: center" ><br><?php echo $package_id;  ?></td>  
                        <td><br><?php echo $title;  ?></td>
                        <td><br><?php echo $price;  ?> <br><br></td> 
                        <td style="text-align: center" ><br><?php echo $memo;?></td>  
                        <td style="text-align: center"><br><a href="delete-advert.php?del_advert=<?php echo $package_id ?>"><button class="btn btn-danger">Delete</button></a>
                                                <a href="service-ads-edit.php?update_advert=<?php echo $package_id ?>"><button class="btn btn-warning">Update</button></a></td>    
                    </tr>
                <?php } ?> 
                </table>
                </div>
            </div>
            </body>
        </div>   
</html>