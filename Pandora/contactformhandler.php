<?php $name = $_POST['Name'];
$email = $_POST['Contact-Email'];
$message = $_POST['Message-body'];


$email_from = 'info@pandporafinancialservices.com';

$email_subject = 'Contact form submission acknowledgement';

$email_body = "Name: $name.\n".
				"Email ID: $email.\n".
					"Message: $message.\n";

$to = "dericchristian@gmail.com";

$headers = "$From: $email_from \r\n";

$headers .= "$Reply-To: $email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");


?>