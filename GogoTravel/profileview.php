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
    $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);
 
    mysqli_query($conn, "UPDATE `user` SET name = '$update_name', email = '$update_email' WHERE id = '$id'") or die('query failed');
 
    $old_pass = $_POST['old_pass'];
    $update_pass = mysqli_real_escape_string($conn, md5($_POST['update_pass']));
    $new_pass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
    $confirm_pass = mysqli_real_escape_string($conn, md5($_POST['confirm_pass']));
 
    if(!empty($update_pass) && !empty($new_pass) && !empty($confirm_pass)){
       if($update_pass != $old_pass){
          $message[] = 'Current password not matched!';
       }elseif($new_pass != $confirm_pass){
          $message[] = 'Confirm password not matched!';
       }else{
          mysqli_query($conn, "UPDATE `user` SET password = '$confirm_pass' WHERE id = '$id'") or die('query failed');
          $message[] = 'Profile Updated successfully!';
       }
    }else{
        $message[] = 'Profile Updated successfully!';
       }
 
    $update_image = $_FILES['update_image']['name'];
    $update_image_size = $_FILES['update_image']['size'];
    $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
    $update_image_folder = 'uploaded_img/'.$update_image;
 
    if(!empty($update_image)){
       if($update_image_size > 2000000){
          $message[] = 'image is too large';
       }else{
          $image_update_query = mysqli_query($conn, "UPDATE `user` SET image = '$update_image' WHERE id = '$id'") or die('query failed');
          if($image_update_query){
             move_uploaded_file($update_image_tmp_name, $update_image_folder);
          }
          $message[] = 'image updated succssfully!';
       }
    }
 
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
            <div class="container col-lg-15">
                <div class="section-top-border">
                    <div class="row">
                        <div class="col-lg-10 col-md-15">
                            <?php
                                $select = mysqli_query($conn, "SELECT * FROM `user` WHERE id = '$id'") or die('query failed');
                                if(mysqli_num_rows($select) > 0){
                                    $fetch = mysqli_fetch_assoc($select);
                                }
                            ?>
                            <h3 class="mb-30">My Profile</h3>

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

                            <form action="login_config.php" method="POST">
                                <div class="col-lg-10 col-md-12 mt-50 ">
                                    <label class="col-md-3">Full Name: <?php echo $fetch['name']; ?></label>
                                </div>
                                <br>
                                <div class="col-lg-10 col-md-12 mt-12  ">
                                    <label class="col-md-3">Username: <?php echo $fetch['username']; ?></label></label>
                                </div>
                                <br>
                                <div class="col-lg-10 col-md-12 mt-12 ">
                                    <label class="col-md-3">E-mail: <?php echo $fetch['email']; ?></label>
                                </div>
                                <br>
                            
                                <br>            
                                    <label class="col-md-3"></label>
                                <div class="col-md-8">
                                    <a href="profile2.php">Edit Profile</a>
                                    <span></span>
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