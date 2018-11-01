<?php
	
/* Email Address */	
$to = 'Asuarez793@gmail.com';

/* Subject */
$subject = 'Someone is interest in Improve Energy';

/* Headers */
// $headers = 'From: Revija' . "\r\n" .
//     'Reply-To: Revija@Revija.com' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();

$email = $_POST['newsletter-email'];

if(isset($email) && !empty($email)){
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$message = 'Email: '.$email;
		echo mail($to, $subject, $message);
	}else{
		echo 2;
	}
	
}

?>