<?php
    session_start();
    session_destroy();
    header('Location: \SD_SEC03_G01_03\GogoTravel\main.php');
    exit;
?>