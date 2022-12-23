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
      $password=md5($password);

      $sql="SELECT * FROM user WHERE username='$username' AND password='$password'";

      $result=mysqli_query($conn,$sql);

      $row=mysqli_fetch_array($result);

      if(@$row["usertype"]=='user')
      {
        $_SESSION['login']=true;
        $_SESSION['name'] = $row['name'];
        $_SESSION['dob'] = $row['dob'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['usertype'] = $row['usertype'];
        header("location:main.php");
      }

      elseif(@$row["usertype"]=='staff')
      {
        $_SESSION['login']=true;
        $_SESSION['name'] = $row['name'];
        $_SESSION['dob'] = $row['dob'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['usertype'] = $row['usertype'];
        header("location:services.php");
      }

      elseif(@$row["usertype"]=='admin')
      {
        $_SESSION['login']=true;
        $_SESSION['name'] = $row['name'];
        $_SESSION['dob'] = $row['dob'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['usertype'] = $row['usertype'];
        header("location:services.php");
      }
      else 
      {
        echo "";
      }
  }
?>