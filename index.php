<?php
require_once("phpmailer/class.phpmailer.php");
require_once("phpmailer/PHPMailerAutoload.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	
$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'owaisnoor0@gmail.com';          // SMTP username
$mail->Password = 'o25214528'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('owaisnoor0@gmail.com', 'OWAIS NOOR');
$mail->addReplyTo('owaisnoor0@gmail.com', 'OWAIS NOOR');
$mail->addAddress('itsowaisnoor@gmail.com');   // Add a recipient
$mail->addCC('itsowaisnoor@gmail.com');
$mail->addBCC('itsowaisnoor@gmail.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>How to Send Email using PHP in Localhost by Owais Noor</h1>';
$bodyContent .= '<p>This is the HTML email sent from localhost using PHP script by <b>Owais Noor</b></p>';

$mail->Subject = 'Email from Localhost by Owais Noor';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}	
}

?>

<html>

<body>
<form action="" method="post">
<input type="email" name="email" placeholder="Enter Your Email"/>
<input type="submit" name="submit" value="submit"/>
</form>

</body>

</html>