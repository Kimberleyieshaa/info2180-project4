<?php
	/*import the database connection file*/
	require "connect.php";

	/*Resume user session*/
	session_start();

	/*Check if the user session is set, else redirect to homepage*/
	if(isset($_SESSION['id'])) {

		//Set current logged in user_id
		$user_id = $_SESSION['id'];

		/*Get data from form*/
		$recipient = $_REQUEST['recipient'];
		$subject = $_REQUEST['subject'];
		$body = $_REQUEST['body'];
		
		/*Query that will insert the message into the database*/
		$insert = "INSERT INTO Message (recipient_ids, subject, body, user_id) VALUES ('$recipient', '$subject', '$body', '$user_id')";

		/*Insert the message to the database*/
		mysql_query($insert);

		//TODO Check if message was sent
		echo "Message sent!"; //REMOVE

	} else {
		print "Please login to send a message.";
	}

	//http_redirect("mail.php", true); TODO redirect to homepage
?>