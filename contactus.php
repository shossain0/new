<?php 

	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	
	$email_form = 'EasyTutorials@avinaskar.com';

	$email_subject = "New From Submission";

	$email_body = "User Name:$name.\n".
					"User Email:$visitor_email.\n".
						"User Message:$message.\n".


		$to = "sohrab_bd@hotmail.com";
						
	$headers = "From: $email_form \r\n";					
	$headers .= "Reply-To: $visitor_email \r\n";						
	mail($to,$email_subject,$email_body,$headers);			
	header("Location: index.html");
	
	
?>