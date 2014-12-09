<?php
	require "connect.php";

	$messages = mysql_query("SELECT * FROM Message LIMIT 10");	//TODO Get the current user_id and display their messages

?>

<!DOCTYPE html>
<html>
<body>
	<table>
		<thead>
			<th>Sender</th>
			<th>Subject</th>
			<th>Body</th>
			<th>Recipient</th>
		</thead>
		<tbody>
			<?php
				while ($row = mysql_fetch_array($messages)) {
					?>
					<tr>
						<td><?php print $row['user_id']; ?></td>
						<td><?php print $row['subject']; ?></td>
						<td><?php print $row['body']; ?></td>
						<td><?php print $row['recipient_id']; ?></td>
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>
</body>
</html>