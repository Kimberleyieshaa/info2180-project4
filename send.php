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
		$recipient_ids = $_REQUEST['recipient'];
		$subject = $_REQUEST['subject'];
		$body = $_REQUEST['body'];
		
		$recipients = explode(";", $recipient_ids);

		for ($i = 0; $i < count($recipients); $i++) {
			str_replace(" ", "", $recipients[$i]);
			/*Query that will insert the message into the database*/
			$insert = "INSERT INTO Message (recipient_ids, subject, body, user_id) VALUES ('$recipients[$i]', '$subject', '$body', '$user_id')";

			/*Insert the message to the database*/
			mysql_query($insert);

			/*Check if the message is sent*/
			//$query = "SELECT * FROM Message WHERE recipient_ids=$recipients[$i]"; //TODO

		}

		//TODO Check if message was sent
		echo "Message sent!"; //REMOVE

	} else {
		print "Please login to send a message.";
	}

	//http_redirect("mail.php", true); TODO redirect to homepage
?>