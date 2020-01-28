<?php>

$name = $_POST['name'];
$reason = $_POST['reason'];
$visitor_email = $_POST['email'];
$message = $_Post{'message'];

$email_from = 'https://slee7246.github.io/Sarah-sPersonalWeb/';
$email_subject = "Web Page Inquiry";
$email_body = "Name: $name.\n".
                "Reason: $reason.\n".
                 "User Email: $visitor_email.\n".
                 "User Message: $message.\n";
                  
$to = "saheel2@Illinois.edu";
$headers = "From: $email_from\r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");
 


?>
