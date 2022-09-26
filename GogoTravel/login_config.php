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
      $username=$_POST['username'];
      $password=$_POST['password'];

      $sql="SELECT * FROM user WHERE username='$username' AND password='$password'";

      $result=mysqli_query($conn,$sql);

      $row=mysqli_fetch_array($result);

      if($row["usertype"]=='user')
      {
        $_SESSION['login']=true;
        $_SESSION['name'] = $row['name'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['id'] = $row['id'];
        header("location:main.php");
      }

      elseif($row["usertype"]=='staff')
      {
        $_SESSION['login']=true;
        $_SESSION['name'] = $row['name'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['id'] = $row['id'];
        header("location:staffdash.php");
      }

      elseif($row["usertype"]=='admin')
      {
        $_SESSION['login']=true;
        $_SESSION['name'] = $row['name'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['id'] = $row['id'];
        header("location:admin/admindash.php");
      }
      else 
      {
        echo "incorrect info";
      }
  }
?>