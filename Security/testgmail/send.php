<?
include "class.phpmailer.php"; 
include "class.smtp.php"; 

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
//$mail->Host = "smtp.gmail.com";
$mail->Host = "mail.caytretramdot.com";
//$mail->Port = 587; // or 587
$mail->Port = 25; // or 587
$mail->IsHTML(true);
/*
$mail->Username = "amthuclangsen@gmail.com";
$mail->Password = "truongquangthai";
$mail->SetFrom("amthuclangsen@gmail.com");
*/
$mail->Username = "admin@caytretramdot.com";
$mail->Password = "admin368189";
$mail->SetFrom("admin@caytretramdot.com");

$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("thanhbao2007vl@gmail.com");
 if(!$mail->Send())
    {
    echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else
    {
    echo "Message has been sent";
    }
?>