<!DOCTYPE html>
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Payments</title>  
</head>
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
     }  
</style>  
<?php
    include 'navbar.php';
?>
<body>  
  
<div class="table-scrol">  
    <h1 align="center"><br>Transactions History</h1>
  
<div class="container col-lg-8">
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
            <th style="text-align: center" class="col-lg-1">ID</th>  
            <th style="text-align: center" class="col-lg-1">Date and Time</th>
            <th style="text-align: center" class="col-lg-1">Booking No.</th>
            <th style="text-align: center" class="col-lg-2">Transaction Detail</th>  
            <th style="text-align: center" class="col-lg-1">Status</th>  
        </tr>  
        </thead>

        <?php  
          
        include 'config.php';
        $sql = "SELECT * FROM booking";
        $result = mysqli_query($conn, $sql);

        while($row=mysqli_fetch_array($result))
        {  
            $trans_id=$row[0];
            $name=$row[1];
            $email=$row[2];
            $package_id=$row[3];
            $title=$row[4];
            $book_no=$row[5];
            $price=$row[6];
            $status=$row[7];
            $date=$row[9];
        
            $show = "<p> Name : $name </p>" . "<p> Email : $email </p>" . "<p> Package ID : $package_id </p>" . "<p> Title : $title </p>" 
                    . "<p> Price : RM$price </p>" 
        ?>
    
        <tr>
            <td style="text-align: center"><br><?php echo $trans_id;  ?></td>  
            <td style="text-align: center"><br><?php echo $date;  ?></td>
            <td style="text-align: center"><br><?php echo $book_no;  ?></td>
            <td><br><?php echo $show;  ?></td>  
            <td style="text-align: center"><br><button class="btn btn-success" value=<?php echo $status ?> disabled>Approved</button></a></td>
    <?php } ?>
    </table>
    </div>
</div>
</body>
 
</html>