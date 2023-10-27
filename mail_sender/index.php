<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
$mail = new PHPMailer(true);
$msg="";

if(isset($_POST['submit']))
{



	$to      = $_POST['to'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	//Email Sending code using PHPmailer

	try {
    //Server settings
    $mail->SMTPDebug = FALSE;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'nensipatel1516@gmail.com';                     //SMTP username
    $mail->Password   = 'oqudkwfpqpkudpxn';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('nensipatel1516@gmail.com', 'Nensi Patel');
    $mail->addAddress($to, '');     //Add a 

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
   
    $mail->send();
    
     echo "<script>alert('Email Sent Successfully..');</script>";
} 
catch (Exception $e) 
{
	   
	echo "<script>alert('Something went wrong.try Again');</script>";    
}


}

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Email-sender</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


	<div class="header">
		<table>
			<tr>
				<td>
		<img style="height: 50px;
                    width: 93px;
                    margin: 11px -2px 0px -18px;
                    "src="logo.png" alt="email">
                </td>
                <td> <a style="font-size:30px;color:white;"> Email Sender Web Application </a> </td>
            </tr>
        </table>
	</div>
    
    
	<div class="content">
		<br/><br/><br/><br/><br/>
		<form method="post">
		<table align="center" cellpadding="10" cellspacing="0">
			
		

			<tr>
				<td class="to">To</td>
				<td><input type="email" name="to" id="to" required></td>
			</tr>

			<tr>
				<td>Subject</td>
				<td><input type="text" name="subject" required></td>
			</tr>
			<tr>
				<td>Message</td>
				<td>
				<textarea name="message" required></textarea>
                </td>
			</tr>	

			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit" value="Send">
				</td>
			</tr>
		</table>
	</form>
	</div>


	<div class="footer">
		<h1 style="text-align:center;color:white">@copyright</h1>
	</div>
   
</body>
</html>