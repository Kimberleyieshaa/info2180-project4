<?php
	
	require "connect.php";

	$username = $_REQUEST["username"];
	$password = $_REQUEST["password"];
	$query = mysql_query("SELECT * FROM User");
	while ($row = mysql_fetch_array($query)) {
		if ($username == $row['username'] && $password == $row['password']) {
			$_SESSION['username'] = $username;
			echo "hello world!! :) ";
		} else {
			echo "incorrect username and password";
		}
	}
?>