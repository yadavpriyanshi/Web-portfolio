<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    
	
	$to      = 'aaksh@gamil.com';
	$subject = 'Site Contact Form';

	$headers = 'From: '. $email;
    
	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		header("location:Contact.php?msg=true");
    }
	else{
		header("location:Contact.php?mssfal=true");}
	
	
	}

?>