<?php  

if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
    
    $sql = "SELECT * FROM user WHERE id= '$id'";
    $result = mysqli_query($conn, $sql);
}else{
	header("Location: index.php");
} 