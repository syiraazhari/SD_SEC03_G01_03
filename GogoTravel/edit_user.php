<?php
include 'config.php';
include 'navbar.php';

$user_id = $_GET['update_user'];
$select = mysqli_query($conn, "SELECT * FROM user WHERE id = '$user_id'");

        while($row=mysqli_fetch_array($select))
        {  
            $user_fullname=$row[2];
            $user_username=$row[1];  
            $user_password=$row[3];  
            $user_email=$row[4];  
        }
        

if(isset($_POST['update_staff'])){

    $update_name = $_POST['update_name'];
    $update_username = $_POST['update_username'];
    $update_email = $_POST['update_email'];
    $update_password = $_POST['update_password'];

    mysqli_query($conn, "UPDATE user SET password = '$update_password', name = '$update_name', username = '$update_username', email = '$update_email' WHERE id = '$user_id'");

    session_destroy();
    header("location:admin-view_staff.php");
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
                            <h3 class="mb-30">Edit User Profile</h3>

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
                                    <label class="col-md-3">Staff ID:</label>
                                    <input type="text" class="form-control" placeholder="ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Staff ID'" value="<?php echo $user_id; ?>"required>
                                </div>
                                <br>
                                <div class="mt-10">
                                    <label class="col-md-3">Full Name:</label>
                                    <input type="text" name="update_name" class="form-control" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'"  value="<?php echo $user_fullname; ?> "required>
                                </div>
                                <br>
                                <div class="mt-10">
                                    <label class="col-md-3">Username:</label>
                                    <input type="text" name="update_username" class="form-control" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'"  value="<?php echo $user_username; ?>" required>
                                </div>
                                <br>
                                <div class="mt-10">
                                    <label class="col-md-3">E-mail:</label>
                                    <input type="email" name="update_email" class="form-control" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'"  value="<?php echo $user_email; ?>" required>
                                </div>
                                <br>
                                <div class="mt-10">
                                    <label class="col-md-3">Password:</label>
                                    <input type="password" name="update_password" placeholder="New password" class="form-control"  value="<?php echo $user_password; ?>" >
                                </div>
                                <br>            
                                    <label class="col-md-3"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-primary" name="update_staff" value="Save ">
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