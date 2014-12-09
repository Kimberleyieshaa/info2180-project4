<?php
	require "connect.php";

	//Resume user session
	session_start();

	//Check if the user session is set, else redirect to homepage
	if(isset($_SESSION['id'])) {

		//Set current logged in user_id
		$user_id = $_SESSION['id'];

		/*Get data from form*/
		$recipient = $_REQUEST['recipient'];
		$subject = $_REQUEST['subject'];
		$body = $_REQUEST['body'];
		
		//Inserts the message into the database
		$insert = "INSERT INTO Message (recipient_id, subject, body, user_id) VALUES ('$recipient', '$subject', '$body', '$user_id')"; //not working

	} else {
		print "session not set";
	}

	//http_redirect("mail.php", true); TODO redirect to homepage
?>