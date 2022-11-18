
<!DOCTYPE html>
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Feedback</title>  
</head>
<?php
    include 'navbar.php';
?>

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
    <h1 align="center"><br>Feedback Submission</h1>
  
<div class="container col-lg-8">
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
            <th style="text-align: center" class="col-lg-1">ID</th>  
            <th style="text-align: center" class="col-lg-1">Subject</th>
            <th style="text-align: center" class="col-lg-2">Feedback</th>  

        </tr>  
        </thead>

        <?php  
          
        include 'config.php';
        $sql = "SELECT * FROM feedback_form";
        $result = mysqli_query($conn, $sql);

        while($row=mysqli_fetch_array($result))
        {  
            $feedback_id=$row[0];
            $name=$row[1];
            $email=$row[2];
            $subject=$row[3];
            $message=$row[4];
        
            $show = "<p> Name : $name </p>" . "<p> Email : $email </p>" . "<p> Message : $message </p>"
        ?>
    
        <tr>
            <td style="text-align: center"><br><?php echo $feedback_id;  ?></td>  
            <td style="text-align: center"><br><?php echo $subject;  ?></td>
            <td><br><?php echo $show;  ?></td>  
 
    <?php } ?>
    </table>
    </div>
</div>
</body>
 
</html>