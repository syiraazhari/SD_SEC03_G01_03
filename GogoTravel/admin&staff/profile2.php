<?php
include 'config.php';
include 'navbar.php';
$id = $_SESSION['id'];
if (!isset($_SESSION['id'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: signin.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['id']);
  header("location: main.php");
}

if(isset($_POST['update'])){

    $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
    $update_username = mysqli_real_escape_string($conn, $_POST['update_username']);
    $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);
    $update_password = mysqli_real_escape_string($conn, $_POST['update_password']);
    $update_password = md5($update_password);

    mysqli_query($conn, "UPDATE user SET password = '$update_password', name = '$update_name', username = '$update_username', email = '$update_email' WHERE id = '$id'");

    session_destroy();
    header("location:signin.php");
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

        <!-- Start Align Area -->
        <div class="whole-wrap">
            <div class="container col-lg-4">
                <div class="section-top-border">
                    <div class="row">
                        <div class="col-lg-10 col-md-10">
                            <?php
                                $select = mysqli_query($conn, "SELECT * FROM `user` WHERE id = '$id'") or die('query failed');
                                if(mysqli_num_rows($select) > 0){
                                    $fetch = mysqli_fetch_assoc($select);
                                }
                            ?>
                            <h3 class="mb-30">Edit Profile</h3>

                            <div class="col-md-3">
                                <div class="text-center">
                                <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                                <?php
                                    /*  if($fetch['image'] == ''){
                                        echo '<img src="images/bg-1" alt="" class="img-thumbnail">';
                                    }else{
                                        echo '<img src="uploaded_img/'.$fetch['image'].'"class="img-thumbnail">'; 
                                    }
                                    
                                    <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="form-control">*/
                                 ?>
                                </div>
                            </div>
                            <!-- edit form column -->

                            <form action="#" method="POST">
                                <div class="mt-10">
                                    <label class="col-md-3">Full Name:</label>
                                    <input type="text" name="update_name" class="form-control" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" value="<?php echo $fetch['name']; ?>" required>
                                </div>
                                <br>
                                <div class="mt-10">
                                    <label class="col-md-3">Username:</label>
                                    <input type="text" name="update_username" class="form-control" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" value="<?php echo $fetch['username']; ?>" required>
                                </div>
                                <br>
                                <div class="mt-10">
                                    <label class="col-md-3">E-mail:</label>
                                    <input type="email" name="update_email" class="form-control" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'" value="<?php echo $fetch['email']; ?>" required>
                                </div>
                                <br>

                                <div class="mt-10">
                                    <input type="password" name = "updatecurrent_pass" placeholder="Enter current password" class="form-control">
                                </div>                          
                                    
                                <div class="mt-10">
                                    <input type="password" name = "new_pass" placeholder="Enter new password"class="form-control">
                                </div>
                                    
                                <div class="mt-10">
                                    <input type="password" name="update_password" placeholder="Confirm password" class="form-control">
                                </div>
                                <br>            
                                    <label class="col-md-3"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-primary" name="update" value="Save ">
                                    <span></span>
                                    <a href="javascript:history.back()">Go Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Align Area -->




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