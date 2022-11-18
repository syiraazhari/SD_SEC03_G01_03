<?php
    include 'navbar.php';
?>

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
</div>

<div class="container col-lg-6">
     <div class="row">
        <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>
        <tr>
            <th>Package ID</th>
            <th>Title</th>
            <th>Quantity</th>
            <th>Sales</th>
        </tr>
        </thead>

        <?php
            $sql = "SELECT * FROM  booking";
            $result = mysqli_query($conn, $sql);
        ?>
        
        </table>
    </body>
</html>