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

            <tr>
                <th scope="row"></th>
                <td width="73%">
                <button class="btn-primary btn" type="submit" name="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form>
</div>

<hr>
     <div class="row">
        <div class="col-sx-12">
            <?php
            if(isset($_POST['submit']))
            {
                $fdate=$_POST['fdate'];
                $tdate=$_POST['tdate'];
                $rtype=$_POST['requesttype'];
            }
            ?>

            <?php
            if($rtype=='mtwise')
            {
                $month1=strtotime($fdate);
                $month2=strtotime($tdate);
                $m1=date("F",$month1);
                $m2=date("F",$month2);
                $y1=date("Y",$month1);
                $y2=date("Y",$month2);
            }
            ?>

            <h4 align="center">Sales Report Month Wise</h4>
            <h4 align="center" style="color:blue">Sales Report  from <?php echo $m1."-".$y1;?> to <?php echo $m2."-".$y2;?></h4>
     <hr>
     <div class="row">
        <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>
        <tr>
            <th>S.NO</th>
            <th>Month / Year </th>
            <th>Sales</th>
        </tr>
        </thead>
        </table>
    </body>
 
</html>>