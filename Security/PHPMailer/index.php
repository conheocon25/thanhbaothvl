<?php

require_once 'class.phpmailer.php';
	$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
	$mail->IsSMTP(); // telling the class to use SMTP

		try {
			$mail->Host       = "mail.caytretramdot.com"; // SMTP server
			$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
			$mail->SMTPAuth   = true;                  // enable SMTP authentication
			$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
			$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
			$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
			$mail->Username   = "amthuclangsen@gmail.com";  // GMAIL username
			$mail->Password   = "truongquangthai";            // GMAIL password
			$mail->AddReplyTo('admin@caytretramdot.com', 'First Last');
			$mail->AddAddress('thanhbao2007vl@gmail.com', 'Thanh Bao');
			$mail->SetFrom('admin@caytretramdot.com', 'First Last');
			$mail->AddReplyTo('admin@caytretramdot.com', 'First Last');
			$mail->Subject = 'PHPMailer Test Subject via mail(), advanced';
			$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
			$mail->MsgHTML(file_get_contents('contents.html'));
			$mail->AddAttachment('images/phpmailer.gif');      // attachment
			$mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
			$mail->Send();

			echo "Message Sent OK<p></p>\n";

		} catch (phpmailerException $e) {

	echo $e->errorMessage(); //Pretty error messages from PHPMailer

	} catch (Exception $e) {

	echo $e->getMessage(); //Boring error messages from anything else!

	}
?>