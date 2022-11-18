<?php
include 'config.php';
include 'navbar.php';

$ad_id = $_GET['update_advert'];
$select = mysqli_query($conn, "SELECT * FROM advert WHERE package_id = '$ad_id'");

        while($row=mysqli_fetch_array($select))
        {  
            $ad_title=$row[1];
            $ad_info=$row[2];  
            $ad_price=$row[3];  
            $ad_memo=$row[4];  
        }

if(isset($_POST['update-ads'])){

    $update_title = $_POST['update_title'];
    $update_info = $_POST['update_info'];
    $update_price = $_POST['update_price'];
    $update_memo = $_POST['update_memo'];

    mysqli_query($conn, "UPDATE advert SET title = '$update_title', info = '$update_info', price = '$update_price', memo = '$update_memo' WHERE package_id = '$ad_id'");

    session_destroy();
    header("location:services.php");
}
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <link rel="shortcut icon" href="img/elements/fav.png">
    <meta name="keywords" content="">
    <meta charset="UTF-8">

    <title>Profile</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/nice-select.css">			
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
    
<div class="table-scrol">  
    
    <!-- Start feature Area -->
    <section class="feature-area" id="secvice">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10"><br>Update Advertisement</h1>
                        <p>Update or edit advertisements here.</p>
                    </div>
                </div>
            </div>		

        <form action="#" class="signin-form" method="POST">				
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10 ">
                    <div class="single-feature mb-30">
                        <div class="title d-flex flex-row pb-20 ">
                            <span class="lnr lnr-paperclip"></span>
                            <h2><a href="#">Advertisement</a></h2>
                        </div>
                        <div>
                                <label class="col-md-3">Ad ID:</label>
                                <input type="number" id="id" name="ad_id" class="form-control" placeholder="Advert ID" value="<?php echo $ad_id; ?>" required>
                        </div>
                        <div>
                                <label class="col-md-3"><br>Title:</label>
                                <input type="text" id="title" name="update_title" class="form-control" placeholder="Advert Title" value="<?php echo $ad_title; ?>"required>
                        </div>	
                        <div>
                                <label class="col-md-3"><br>Info:</label>
                                <input type="text" id="info" name="update_info" class="form-control" placeholder="Advert Info" value="<?php echo $ad_info; ?>" required>
                        </div>
                        <div>
                                <label class="col-md-3"><br>Price:</label>
                                <input type="number" id="price" name="update_price" class="form-control" placeholder="Advert Price" value="<?php echo $ad_price; ?>" required>
                        </div>	
                        <div>
                                <label class="col-md-6"><br>Memo:</label>
                                <input style="height:200px" type="text" id="memo" name="update_memo" class="form-control" placeholder="Advert Short Description" value="<?php echo $ad_memo; ?>" required>
                        </div>	
                        <div class="col-md-8">
                            <br>
                            <input type="submit" class="btn btn-primary" name="update-ads" value="Save ">
                            <br><br>
                        </div>					
                    </div>							
                </div>			            													
            </div>
        </form>	
        </div>	
    </section>
    <!-- End feature Area -->   


        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>			
        <script src="js/parallax.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/main.js"></script>	
    </body>
</html>