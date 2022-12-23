<?php  

    include 'config.php';  
    $delete_id=$_GET['del_advert'];  
    $delete_query="DELETE FROM advert WHERE package_id='$delete_id'";
    $run=mysqli_query($conn,$delete_query);
    
    if($run)  
    {  
        //javascript function to open in the same window   
        echo "<script>window.open('services.php?deleted=user has been deleted','_self')</script>";  
    }  
  
?> 