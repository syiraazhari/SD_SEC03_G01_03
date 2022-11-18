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
  
<div class="container col-lg-10">
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th>ID</th>  
            <th>Full Name</th>
            <th>Username</th>  
            <th>Password</th>  
            <th>Email</th>  
            <th>Delete User</th>  
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
        
        ?>
    
        <tr>
            <td><?php echo $user_id;  ?></td>  
            <td><?php echo $user_fullname;  ?></td>
            <td><?php echo $user_username;  ?></td>  
            <td><?php echo $user_password;  ?></td>  
            <td><?php echo $user_email;  ?></td>  
            <td><a href="delete-user.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr>
    <?php } ?>
    </table>
    </div>
</div>
</body>
 
</html>