<?php

    unset($_SESSION['username']);
    unset($_SESSION['password']);

    header('Location: main.php');
  
?>