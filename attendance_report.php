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

// Query the database for attendance status
$present_users = array();
$absent_users = array();
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        if (isset($_POST['attendance'][$row["id"]])) {
            if ($_POST['attendance'][$row["id"]] === 'present') {
                $present_users[] = $row;
            } else {
                $absent_users[] = $row;
            }
        } else {
            $absent_users[] = $row;
        }
    }
}

// Output the attendance table
echo "<h1>Attendance Report</h1>";
echo "<h2>Present Users</h2>";
if (count($present_users) > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Username</th><th>Email</th><th>Date of Birth</th><th>Preferred Time</th><th>Preferred Sport</th><th>Registration Time</th></tr>";
    foreach ($present_users as $user) {
        echo "<tr><td>".$user["id"]."</td><td>".$user["username"]."</td><td>".$user["email"]."</td><td>".$user["date"]."</td><td>".$user["time"]."</td><td>".$user["sport"]."</td><td>".$user["registration_time"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No users were present.";
}

echo "<h2>Absent Users</h2>";
if (count($absent_users) > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Username</th><th>Email</th><th>Date of Birth</th><th>Preferred Time</th><th>Preferred Sport</th><th>Registration Time</th></tr>";
    foreach ($absent_users as $user) {
        echo "<tr><td>".$user["id"]."</td><td>".$user["username"]."</td><td>".$user["email"]."</td><td>".$user["date"]."</td><td>".$user["time"]."</td><td>".$user["sport"]."</td><td>".$user["registration_time"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No users were absent.";
}

mysqli_close($conn);
?>
