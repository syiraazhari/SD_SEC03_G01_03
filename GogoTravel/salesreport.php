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

<div class="container col-lg-6">
    <form name="bwdatesdata" action="" method="post" action=""> 
        <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
            <tr>
                <th scope="row">From Date :</th>
                <td width="73%">
                    <input type="date" name="fdate" class="form-control" id="fdate">
    	        </td>
            </tr>

            <tr>
                <th scope="row">To Date :</th>
                <td width="73%">
                    <input type="date" name="tdate" class="form-control" id="tdate">
    	        </td>
            </tr>

            <tr>
                <th scope="row">Request Type :</th>
                <td width="73%">
                    <input type="radio" name="requesttype" value="mtwise" checked="true">Month wise
                    <input type="radio" name="requesttype" value="yrwise">Year wise
    	        </td>
            </tr>
</body>
 
</html>>