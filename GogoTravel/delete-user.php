<?php  

    include 'config.php';  
    $delete_id=$_GET['del'];  
    $delete_query="DELETE FROM user WHERE id='$delete_id'";
    $run=mysqli_query($conn,$delete_query);
    
    if($run)  
    {  
        //javascript function to open in the same window   
        echo "<script>window.open('view_user.php?deleted=user has been deleted','_self')</script>";  
    }  
  
?> 