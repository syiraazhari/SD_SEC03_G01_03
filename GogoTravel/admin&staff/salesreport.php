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
            <th style="text-align: center">Most to Least Purchased</th>
            <th style="text-align: center">Sales</th>
            <?php 
                // Build the list from a query result-set array
                $list = "";
                $num = 0;
                $sql = "SELECT title, count(title) AS package_id FROM booking GROUP BY title ORDER BY package_id DESC";
                $query = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                    $num++;
                    $title = $row["title"];
                    $package_id = $row["package_id"];
                    $list .= $num.') '.$title.' - <b>'.$package_id.'</b> customers<br><br><br>';
                }

            ?>
        </tr>
        </thead>

        <?php
            $sql = "SELECT * FROM  packages WHERE package_id='1'";
            $result = mysqli_query($conn, $sql);

            while($row=mysqli_fetch_array($result)){
                $package_id=$row[0];  
                $title=$row[1];  
                $price=$row[2];
                $sales=$row[3];
            
        ?>
        <tr> 
            <td style=""><br><?php echo $list;?></td><br>
            <td style="text-align: center; font-size: 80px"><br>RM7191</td><br>
        <?php } ?>
        
        </table>
    </body>
</html>