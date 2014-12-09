<?php
	/*import the database connection file*/
	require "connect.php";

	/*Check if the user is already logged in*/


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
			

			echo "Welcome" . " " . $row["username"]; //REMOVE

			//TODO REDIRECT user to mail.php page (User homepage)

			$_SESSION['id'] = $row['id'];
			echo $row['id'];	//store logged in user id 
		}
	}
?>