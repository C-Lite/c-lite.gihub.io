<?php

require_once('PHPMailer/PHPMailerAutoload.php');


	if (isset($_POST['submit'])) {
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->SMTPAuth=true;
		$mail->SMTPSecure = 'ssl';
		$mail->Host='smtp.gmail.com';
		$mail->Port='465';
		$mail->isHTML();
		$mail->Username = '';
		$mail->Password = '';

		$from = $_POST['email'];
		$name = $_POST['name'];
		$subject = $_POST['subject'];
		$number = $_POST['number'];
		$cmessage = $_POST['message'];
		$txt = "You have received an email from ".$name.".\n\n".$cmessage.".\n\n".$number;

		$mail->SetFrom('no-reply@clite.com');
		$mail->Subject=$subject;
		$mail->Body=$txt;
		$mail->AddAdress($from);
		$mail->Send();
	}
	if (!$mail->send()) {
    	echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
    	echo "Message sent!";
	}
?>
