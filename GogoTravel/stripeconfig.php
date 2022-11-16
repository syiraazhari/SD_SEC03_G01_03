<?php

    require_once "stripe-php-master/init.php";

    $stripedetails = array(
              "publishableKey"=>"pk_test_51M4Rb2DRp66hZsfke3Olyej9Q0apuanvHcdJfeBNf7tehbJ1XmGtWzPAnkDmE3sW6WnfffQpECVLRkrNzDS4P7Of00LIz96Z1z",
              "secretKey"=>"sk_test_51M4Rb2DRp66hZsfkqz90zaMhrnIQHZx21Q16rxPhNvUUA3DJm9wno5tfu7pRb9fcQ539XusFgGywzeyRuElxV1VV00lS0EekMi"
    );

    \Stripe\Stripe::setApiKey($stripedetails["secretKey"]);
?>