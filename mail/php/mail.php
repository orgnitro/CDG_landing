<?php

// mb_internal_encoding("UTF-8");
// ini_set('error_reporting', E_ALL);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);

	use PHPMailer\PHPMailer\PHPMailer;
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		require_once($_SERVER['DOCUMENT_ROOT'] . '/mail/phpmailer/phpmailer.php');
		require_once($_SERVER['DOCUMENT_ROOT'] . '/mail/php/config.php');
		require_once($_SERVER['DOCUMENT_ROOT'] . '/mail/php/valid.php');

		if(defined('HOST') && HOST != '') {
			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->Host = HOST;
			$mail->SMTPAuth = true;
			$mail->Username = LOGIN;
			$mail->Password = PASS;
			$mail->SMTPSecure = 'ssl';
			$mail->Port = PORT;
			$mail->AddReplyTo(SENDER);
		} else {
			$mail = new PHPMailer;
		}

		$text = '<span>Thank you for visiting my tribute page to CDG perfumery. <br>Read more about COMME des GARCONS Rouge at their <a href="https://www.comme-des-garcons-parfum.com/perfumes/rouge">Website</a>. If you liked the images on the webpage, find more at the <a href="https://www.instagram.com/jordan_hemingway/?hl=en">Jordan Hemingway\'s instagram.</a><br>.<br> Good luck, <br>Orgnitro.</span>';
		// $text = '<span>Thank you for visiting my tribute page to CDG perfumery. <br>Read more about COMME des GARCONS Rouge at their <a href="https://www.comme-des-garcons-parfum.com/perfumes/rouge">Website</a>. If you liked the images on the webpage, find more at the <a href="https://www.instagram.com/jordan_hemingway/?hl=en">Jordan Hemingway\'s instagram.</a><br><br> Best Regards, <br>Orgnitro.</span>';

		$mail->setFrom(SENDER);
    $mail->addAddress($email);
    $mail->CharSet = CHARSET;
    $mail->isHTML(true);
		$mail->Subject = SUBJECT;
		$mail->Body = "$name $text"; 
		if(!$mail->send()) {
    } else {
      echo json_encode($msgs);
    }
	
	} else{
    header ("Location: /");
	}