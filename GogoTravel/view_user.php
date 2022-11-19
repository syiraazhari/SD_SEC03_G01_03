<?php
    include 'navbar.php';
?>

<!DOCTYPE html>
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>View Users</title>  
</head>
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
     }  
</style>  
  
<body>  
  
<div class="table-scrol">  
    <h1 align="center"><br>User Lists</h1>  
  
<div class="container col-lg-6">
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th style="text-align: center" class="col-lg-1">ID</th>  
            <th style="text-align: center" class="col-lg-1">Full Name</th>
            <th style="text-align: center" class="col-lg-2">User Details</th>    
            <th style="text-align: center" class="col-lg-1">Action</th>  
        </tr>  
        </thead>

        <?php  
          
        include 'config.php';
        $sql = "SELECT * FROM user WHERE usertype = 'user'";
        $result = mysqli_query($conn, $sql);

        while($row=mysqli_fetch_array($result))
        {  
            $user_id=$row[0];  
            $user_fullname=$row[2];
            $user_username=$row[1];  
            $user_password=$row[3];  
            $user_email=$row[4];   
            
            $show = "<p> Username : $user_username </p>" . "<p> Email : $user_email </p>"; 
        ?>
    
        <tr>
            <td style="text-align: center"><br><?php echo $user_id;  ?></td>  
            <td style="text-align: center"><br><?php echo $user_fullname;  ?></td>
            <td ><br><?php echo $show;  ?></td>   
            <td style="text-align: center"><br><a href="delete-user.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a>
            <a href="edit_user.php?update_user=<?php echo $user_id ?>"><button class="btn btn-warning">Edit</button></a></td>
        </tr>
    <?php } ?>
    </table>
    </div>
</div>
</body>
 
</html>