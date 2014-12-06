<?php
	/*import the database connection file*/
	require "connect.php";

	//Start user sesion
	session_start();

	/*username and password requested from form*/
	$username = $_REQUEST["username"];
	$password = $_REQUEST["password"];

	/*Gets a list of all registered users*/
	$query = mysql_query("SELECT * FROM User");


	/*Checks if the username and password given is found in the database*/
	while ($row = mysql_fetch_array($query)) {
		if ($username == $row["username"] && $password == $row["password"]) {
			echo "Welcome" . " " . $row["username"];
			//TODO REDIRECT user to mail.php page (User homepage)
			$_SESSION['user_id'] = $row['user_id'];
			$user_id = $row['user_id'];	//store logged in user id 
		}
	}
?>