<?php
    include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>View Sales Report</title>  
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
    <h1 align="center"><br>Sales Report</h1>

        <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>
        <tr>  
            <th style="text-align: center">From Date :</th>
            <td><input type="date" name="fdate" class="form-control" id="fdate"></td>

            <th style="text-align: center">To Date :</th>
            <td><input type="date" name="tdate" class="form-control" id="tdate"></td>

            <th style="text-align: center">Request Type :</th>
            <td><input type="radio" name="requesttype" value="mtwise" checked="true">Month wise
            <input type="radio" name="requesttype" value="yrwise">Year wise</td>
            <td><button class="btn-primary btn" type="submit" name="submit">Check</button></td>
        </tr>  
        </thead>

        <?php  
          
        include 'config.php';
        $sql = "SELECT * FROM user WHERE usertype = 'staff'";
        $result = mysqli_query($conn, $sql);

        while($row=mysqli_fetch_array($result))
        {  
            $user_id=$row[0];  
            $user_fullname=$row[2];
            $user_username=$row[1];  
            $user_password=$row[3];  
            $user_email=$row[4];  
        
            $show = "<p> Username : $user_username </p>" . "<p> Email : $user_email </p>" . "<p> Password : $user_password </p>" 
        ?>
    
        <tr>
            <td style="text-align: center"><br><?php echo $user_id;  ?></td>  
            <td style="text-align: center"><br><?php echo $user_fullname;  ?></td>
            <td ><br><?php echo $show;  ?></td>   
            <td style="text-align: center"><br><a href="delete-user.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a>
                <a href="admin-edit-staff.php?update_staff=<?php echo $user_id ?>"><button class="btn btn-warning">Edit</button></a></td> 
    <?php } ?>
    </table>
    </div>
</div>
</body>
 
</html>>