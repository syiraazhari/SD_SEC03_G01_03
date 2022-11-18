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

<div class="container-fluid">
  <!--center-->
  <div class="col-sm-8">
    <div class="row">
        <div class="col-xs-12">
        <h3>Sales Report</h3>
		<hr>
		<form name="bwdatesdata" action="" method="post" action="">
        <table width="100%" height="117"  border="0">
        <tr>
        <th width="27%" height="63" scope="row">From Date :</th>
        <td width="73%">
        <input type="date" name="fdate" class="form-control" id="fdate">
    	</td>
        </tr>
 
        <tr>
        <th width="27%" height="63" scope="row">To Date :</th>
        <td width="73%">
    	<input type="date" name="tdate" class="form-control" id="tdate"></td>
        </tr>
        <tr>
        <th width="27%" height="63" scope="row">Request Type :</th>
        <td width="73%">
        <input type="radio" name="requesttype" value="mtwise" checked="true">Month wise
        <input type="radio" name="requesttype" value="yrwise">Year wise</td>
        </tr>
        <tr>
        <th width="27%" height="63" scope="row"></th>
        <td width="73%">
    	<button class="btn-primary btn" type="submit" name="submit">Check</button>
        </tr>
        </table>
        </form>
        </div>
    </div>
  </div>
</div>
</body>
 
</html>>