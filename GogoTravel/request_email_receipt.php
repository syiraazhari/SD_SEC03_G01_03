<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';
require 'config.php';

$select_id=$_GET['booking_no'];  
$select_query="SELECT * FROM booking WHERE booking_number='$select_id'";
$result = mysqli_query($conn, $select_query);

while($row=mysqli_fetch_array($result))
{  $paymentID=$row[0];  $paymentName=$row[1]; $paymentEmail=$row[2]; $booking_title=$row[4];  $price=$row[6];  $status=$row[7];}   


    $message = file_get_contents("receiptemail.php");
    $message = str_replace("purchase_name","{$paymentName}",$message);
    $message = str_replace("purchase_email","{$paymentEmail}",$message);
    $message = str_replace("refer_id","{$paymentID}",$message);
    $message = str_replace("booking_id","{$select_id}",$message);
    $message = str_replace("booking_title","{$booking_title}",$message);
    $message = str_replace("booking_price","{$price}",$message);
    $message = str_replace("booking_status","{$status}",$message);


    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    $mail -> AddEmbeddedImage('img/thankyou.png','tymsg');
    $mail -> AddEmbeddedImage('img/booking.png','logo');


    try {
        //Enable verbose debug output
        $mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;

        //Send using SMTP
        $mail->isSMTP();

        //Set the SMTP server to send through
        $mail->Host = 'smtp.gmail.com';

        //Enable SMTP authentication
        $mail->SMTPAuth = true;

        //SMTP username
        $mail->Username = 'sdgroup1gogotravel@gmail.com';

        //SMTP password
        $mail->Password = 'zvfoiwrwqrkxxqoz';

        //Enable TLS encryption;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        $mail->Port = 587;

        //Recipients
        $mail->setFrom('sdgroup1gogotravel@gmail.com', 'Gogo Travel');

        //Add a recipient
        $mail->addAddress($paymentEmail);

        //Set email format to HTML
        $mail->isHTML(true);


        $mail->Subject = 'Booking Confirmed. #BOOKING: '.$select_id;
        $mail->Body    = $message; //"<p>Your password reset link is: <a href=localhost/SD_SEC03_G01_03/GogoTravel/resetpassconfirm.php?code=$code> HERE</a>";

        $mail->send();

        header("location:main.php");
        // echo 'Message has been sent';

        // connect with database
        //$conn = mysqli_connect("localhost", "root", "", "sd_g01_03");


        //$sql = "INSERT INTO user (name, username, password, email, verification_code) VALUES ('$name', '$username' , '$password', '$email', '$verification_code')";
        
        //if ($conn->query($sql)===true){
        //	header("location:resetpass.php");
        //} else{
        //	die(mysqli_error($conn));
        //}

    }catch (Exception $e){
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }


?>