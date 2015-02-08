<?php

require 'phpmailer/PHPMailerAutoload.php';

//Retrieve form data. 
//GET - user submitted data using AJAX
//POST - in case user does not support javascript, we'll use POST instead

$email = ($_GET['email']) ?$_GET['email'] : $_POST['email'];
$first = ($_GET['first']) ?$_GET['first'] : $_POST['first'];
$last = ($_GET['last']) ?$_GET['last'] : $_POST['last'];
$options = ($_GET['options']) ?$_GET['options'] : $_POST['options'];
// $password = md5(($_GET['password']) ?$_GET['password'] : $_POST['password']);

//flag to indicate which method it uses. If POST set it to 1
if ($_POST) $post=1; 

//Simple server side validation for POST data, of course, you should validate the email
//if (!$email) $errors[count($errors)] = 'Please enter your email.'; 

//If the errors array is empty, send the mail
if (!$errors) {

	$mail = new PHPMailer;

	$mail->IsSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.mandrillapp.com';                 // Specify main and backup server
	$mail->Port = 587;                                    // Set the SMTP port
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'snahrvar@gmail.com';               // SMTP username
	$mail->Password = 'laypOykX9Im6mLdaYPZnyA';           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

	$mail->From = $email;
	$mail->FromName = 'Nomination Website';
	$mail->AddAddress('michael.stone2@gmail.com');   		  	  				// Add a recipient

	$mail->IsHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Mario Racco: Get Involved';
	$mail->Body    = "Hello first: $first last: $last email: $email options: $options";
	$mail->AltBody = "Hello";

	$result = $mail->Send();
	
	if ($_POST) {
		if ($result) echo 'Your email has been sent.';
		else echo 'Sorry, unexpected error. Please try again later';
		
	//else if GET was used, return the boolean value so that 
	//ajax script can react accordingly
	//1 means success, 0 means failed
	} else {
		echo $result;	
	}

// If the errors array has values
} else {}

if ($result) return 1;
	else return 0;

?>