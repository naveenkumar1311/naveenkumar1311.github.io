<?php
	$name = $_GET['name'];
	$visitor_email = $_GET['email'];
	$message = $_GET['message'];

        $email_from = 'naveen.kumar131196@gmail.com'
	$email_subject = 'New Form Submission';
   	$email_body = "User Name: $name.\n".
			"User Email: $visitor_email.\n".
			   "User Message: $message.\n";

 	$to = "naveen.kumar131196@gmail.com";

 	$headers = "From: $email_form \r\n";

	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to, $email_subject, $email_body, $headers);

	header("Location: index.html");
?>
