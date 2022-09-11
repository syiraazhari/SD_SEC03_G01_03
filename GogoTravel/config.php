<?php
  $hostname = "localhost";
  $user = 'root';
  $password = '';
  $dbname = 'sd_g01_03';
  $conn = new mysqli($hostname, $user, $password, $dbname);

  if($conn -> connect_error) {
    die($conn -> connect_error);
  }
?>