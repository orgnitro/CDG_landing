<?php

// mb_internal_encoding("UTF-8");
// ini_set('error_reporting', E_ALL);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);

	use PHPMailer\PHPMailer\PHPMailer;
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		require_once($_SERVER['DOCUMENT_ROOT'] . '/mail/phpmailer/phpmailer.php');
		require_once($_SERVER['DOCUMENT_ROOT'] . '/mail/phpmailer/smtp.php');
		require_once($_SERVER['DOCUMENT_ROOT'] . '/mail/php/config.php');
		require_once($_SERVER['DOCUMENT_ROOT'] . '/mail/php/valid.php');

		if(defined('HOST')) {
			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'kumsingh78@gmail.com';
			$mail->Password = 'Pigsshallbe&93';
			$mail->SMTPSecure = 'ssl';
			$mail->Port = '465';
			$mail->AddReplyTo('kumsingh78@gmail.com');
		} else {
			$mail = new PHPMailer;
		}

	$text = "hello";

	$mail->setFrom('kumsingh78@gmail.com');
	$mail->addAddress($email);
	$mail->CharSet = 'UTF-8';
	$mail->isHTML(true);
	$mail->Subject = "Feedback Form from CDG Fake Landing Page";
	$mail->Body = "$name $text"; 
	
	if(!$mail->send()) {
	} else {
		echo json_encode($msgs);
	}

} else {
	header ("Location: /");
}