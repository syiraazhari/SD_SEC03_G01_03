<?php
  $hostname = "localhost";
  $user = 'root';
  $password = '';
  $dbname = 'sd_g01_03';
  $conn = new mysqli($hostname, $user, $password, $dbname);

  if($conn -> connect_error) {
    die($conn -> connect_error);
  }

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
      $username=$_POST["username"];
      $password=$_POST["password"];

      $sql="select * from user where username='$username' AND password='$password'";

      $result=mysqli_query($conn,$sql);

      $row=mysqli_fetch_array($result);

      if($row["usertype"]=="user")
      {
        header("location:main.php");
        $_SESSION['login']=true;

      }

      elseif($row["usertype"]=="staff")
      {
        header("location:staffdash.php");
      }

      elseif($row["usertype"]=="admin")
      {
        header("location:admindash.php");
      }
      else 
      {
        echo "incorrect info";
      }
  }
?>