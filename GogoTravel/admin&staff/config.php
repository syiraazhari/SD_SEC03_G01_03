<?php

  @define('STRIPE_API_KEY', 'sk_test_51M4Rb2DRp66hZsfkqz90zaMhrnIQHZx21Q16rxPhNvUUA3DJm9wno5tfu7pRb9fcQ539XusFgGywzeyRuElxV1VV00lS0EekMi');  
  @define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51M4Rb2DRp66hZsfke3Olyej9Q0apuanvHcdJfeBNf7tehbJ1XmGtWzPAnkDmE3sW6WnfffQpECVLRkrNzDS4P7Of00LIz96Z1z'); 

  @define('STRIPE_SUCCESS_URL', 'http://localhost/SD_SEC03_G01_03/GogoTravel/success.php'); 
  @define('STRIPE_CANCEL_URL', 'http://localhost/SD_SEC03_G01_03/GogoTravel/cancel.php'); 

  $hostname = "localhost";
  $user = 'root';
  $password = '';
  $dbname = 'sd_g01_03';
  $conn = new mysqli($hostname, $user, $password, $dbname);

  if($conn -> connect_error) {
    die($conn -> connect_error);
  }
?>