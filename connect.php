<?php
	$db_connect = mysql_connect("localhost", "root", "");
	$db_select = mysql_select_db("cheapo_database");

	$username = $_REQUEST["username"];
	$password = $_REQUEST["password"];

	$query = mysql_query("SELECT * FROM User");

	while ($row = mysql_fetch_array($query)) {
		if ($password == $row['password'] {
			$_SESSION['username'] = $username;
			echo "hello world!! :) ";
		}

	}

?>