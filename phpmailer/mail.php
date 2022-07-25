<?php
function sendOTP($email,$otp)
{
		require 'phpmailer/PHPMailerAutoload.php';
		require 'phpmailer/class.phpmailer.php';
		require 'phpmailer/class.smtp.php';

		$message_body = "<br>Hi there!<br/>Your One Time Password for registration  is:<br/><strong><h2>". $otp."</h2></strong><br/>Please don't share your otp with anyone. If this wasn’t you, please ignore this message.</strong>";
		$mail = new PHPMailer;
		try{
		$mail->isSMTP();  //use smtp class to cpnnect with mail server
		$mail->SMTPAuth = TRUE;
		$mail->SMTPDebug = 2;

		$mail->Mailer   = "smtp";  //mailer protocol
		$mail->Host     = "smtp.gmail.com";// address of email host
		$mail->Port     = 587; //port number

		$mail->SMTPSecure = 'tls'; // tls or ssl (encryption used by email host)

		$mail->Username = "ikigai970@gmail.com"; //enter email id here
		$mail->Password = "pcymgpcizowvwvle"; //enter password here

		$mail->SetFrom("ikigai970@gmail.com","Sai Parimala"); //email from which we want to send mail
		$mail->AddAddress($email);//email of receiver

		$mail->IsHTML(true);
		$mail->Subject = "Verify email- OTP";
		$mail->MsgHTML($message_body);
		$mail->Send();
		echo 'Message has been sent';
		if(!$mail->Send())
			{
				return 0;
			}
		else
		{
			return 1;
		}
	}
	catch(Exception $e){
		echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";
	}
}
?>
