<?php


$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message = $_POST['message'];

$email_from = "$visitor_email";
$email_subject = "TaraTop info";

$email_body="User Name: $name.\n".
				"User email: $visitor_email.\n".
					"User Message: $message.\n";
					
					
$to = "info@tara-top.com";

$headers = "From: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);
header("Location: kontakt.php");
					



?>