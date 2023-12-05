




<html>
<head>
	<title>User Attendance</title>
</head>
<body>
	<h1>User Attendance</h1>
	<form method="post" action="attendance_report.php">
	<table>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Email</th>
			<th>Date of Birth</th>
			<th>Preferred Time</th>
			<th>Preferred Sport</th>
			<th>Registration Time</th>
			<th>Present</th>
			<th>Absent</th>
		</tr>
		<?php
		// Connect to the database
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "fitness";
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		// Fetch all users from the database
		$sql = "SELECT * FROM users";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// Output each row as a table row
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>".$row["id"]."</td>";
				echo "<td>".$row["username"]."</td>";
				echo "<td>".$row["email"]."</td>";
				echo "<td>".$row["date"]."</td>";
				echo "<td>".$row["time"]."</td>";
				echo "<td>".$row["sport"]."</td>";
				echo "<td>".$row["registration_time"]."</td>";
				echo "<td><input type='radio' name='attendance[".$row["id"]."]' value='present'></td>";

				echo "<td><input type='radio' name='attendance[".$row["id"]."]' value='absent'></td>";
				echo "</tr>";
			}
		} else {
			echo "No users found";
		}

		mysqli_close($conn);
		?>
	</table>
	<input type="submit" value="Submit Attendance">
	</form>
</body>
</html>