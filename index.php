<?php


    $to = " theakshaykumar98@gmail.com";
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = $_POST['email'];

    $headers = "from: $from";

    $mail( $to, $subject, $message, $headers );

    echo "Mail Sent! Thanks for choosing Us!";

?>


