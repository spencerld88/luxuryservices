<?php

    $name = $_POST["name"];
    $visitor_email = $_POST["email"];
    $number = $_POST["number"];
    $message = $_POST["message"];

    $email_from = "spencerld88@gmail.com";

    $email_subject = "New Form Submission";

    $email_body = "Clients Name: $name.\n".
        "Clients Email: $visitor_email.\n".
        "Clients Number: $number.\n".
        "Clients Message: $message.\n";

    $to = "spencerdyer86@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: luxuryservices-contact.html");

?>