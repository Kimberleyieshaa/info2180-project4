<?php
	require "connect.php";

	session_start();

	if (isset($_SESSION['id'])) {

		$user_id = $_SESSION['id'];

		$subject = $_POST['subject'];
		$recipient_id = $_POST['recipient_id'];
		$body = $_POST['body'];

		//$message_id = $_POST['message_id'];

		$insert = mysql_query("INSERT INTO Message (recipient_ids, subject, body, user_id) VALUES ('$recipient_id', '$subject', '$body', '$user_id')");
	} else {
		//User should be logged in
	}
?>