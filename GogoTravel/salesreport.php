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

    <form name="bwdatesdata" action="" method="post" action="">
        <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <tr>
        <th scope="row">From Date :</th>
        <td width="73%">
        <input type="date" name="fdate" class="form-control" id="fdate">
    	</td>
        </tr>
 
        <tr>
        <th cope="row">To Date :</th>
        <td width="73%">
    	<input type="date" name="tdate" class="form-control" id="tdate"></td>
        </tr>
        
        <tr>
        <th scope="row">Request Type :</th>
        <td width="73%">
        <input type="radio" name="requesttype" value="mtwise" checked="true">Month wise
        <input type="radio" name="requesttype" value="yrwise">Year wise</td>
        </tr>

        <tr>
        <th scope="row"></th>
        <td width="73%">
    	<button class="btn-primary btn" type="submit" name="submit">Check</button>
        </tr>
        </table>
     </form>
</div>
</body>
</html>