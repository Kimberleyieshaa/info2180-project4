<?php
	require "connect.php";


	$results = mysql_query("SELECT * FROM Message");


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
				while ($row = mysql_fetch_array($results)) {
					?>
					<tr>
						<td><?php $row['user_id']; ?></td>
						<td><?php $row['subject']; ?></td>
						<td><?php $row['body']; ?></td>
						<td><?php $row['recipient_id']; ?></td>
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>
</body>
</html>