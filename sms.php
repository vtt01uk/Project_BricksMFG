<?php 

	require('assets/twilio-php/services/twilio.php');	

	$sid = "AC30a1b3c867f2afd42138ae18e02c52c7"; // Your Account SID from www.twilio.com/user/account
	$token = "04244749229df3d51b8a40ebf1c2e8e8";


	$user= new Services_Twilio($sid,$token);
	$message = $user->account->messages->sendMessage(
		'6503833626',
		'4084997981',
		"Hello from Moon's Twilio account!");

	print $message->sid;


?> 