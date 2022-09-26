<?php
include 'config.php';
session_start(); 
$id = $_SESSION['id'];
if (!isset($_SESSION['id'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: signin.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['id']);
  header("location: signin.php");
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
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
</head>
<body>
<div class="container">
<?php
    $select = mysqli_query($conn, "SELECT * FROM `user` WHERE id = '$id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
        $fetch = mysqli_fetch_assoc($select);
      }
      ?>
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      
      <div class="col-md-3">
        <div class="text-center">
        <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
        <?php
            /*  if($fetch['image'] == ''){
                echo '<img src="images/bg-1" alt="" class="img-thumbnail">';
              }else{
                echo '<img src="uploaded_img/'.$fetch['image'].'"class="img-thumbnail">'; 
              }*/
              ?>
          <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <?php
          if(isset($message)){
            foreach($message as $message){
               echo $message;
            }
         }
         ?>
        </div>
        <h3>Personal info</h3>
        
        
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="update_name" value="<?php echo $fetch['name']; ?>" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="update_email" value="<?php echo $fetch['email']; ?>" required>
            </div>
          </div>
          <input type="hidden" name = "old_pass" class="form-control" value="<?php echo $fetch['password']; ?>">
          <div class="form-group">
            <label class="col-md-3 control-label">Current Password:</label>
            <div class="col-md-8">
            <input type="password" name = "update_pass" placeholder="Enter current password" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">New Password:</label>
            <div class="col-md-8">
            <input type="password" name = "new_pass" placeholder="Enter new password"class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
            <input type="password" name="confirm_pass" placeholder="Confirm password" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" name="update" value="Save Changes">
              <span></span>
              <a href="javascript:history.back()">Go Back</a>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
</body>
      <script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/slick.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/waypoints.min.js"></script>		
			<script src="js/main.js"></script>	
</html>