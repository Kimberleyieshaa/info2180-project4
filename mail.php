<?php
	require "connect.php";

	/*resume user session*/
	session_start();

	$recipient_id = $_SESSION['id'];

	$messages = mysql_query("SELECT * FROM Message WHERE recipient_ids=$recipient_id LIMIT 10");	//TODO Get the first 10 unread messages

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
						<td><?php print $row['recipient_ids']; ?></td>
						<td><a href=<?php echo "message.php?id=" . $row['id']; ?>>Read</a></td>
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>
</body>
</html>