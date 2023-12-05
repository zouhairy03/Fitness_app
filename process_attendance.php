<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  
  require 'Exception.php';
  require 'PHPMailer.php';
  require 'SMTP.php';
  
  // create a new PHPMailer instance for user confirmation email
  $mail_user = new PHPMailer(true);

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

// Process attendance data
if(isset($_POST['attendance'])) {
    $attendance = $_POST['attendance'];
    foreach($attendance as $value) {
        $arr = explode("-", $value);
        $id = $arr[0];
        $status = $arr[1];

        // Update the user's attendance status in the database
        $sql = "UPDATE users SET attendance='$status' WHERE id='$id'";
        mysqli_query($conn, $sql);

        // Send an email to the user based on their attendance status
        $user_query = "SELECT * FROM users WHERE id='$id'";
        $user_result = mysqli_query($conn, $user_query);
        $user = mysqli_fetch_assoc($user_result);
        $to = $user['email'];
        $subject = "Fitness Training Attendance";
        if ($status == "present") {
            $message = "Thank you for attending today's training session. We hope to see you again next time!";
        } else {
            $message = "We noticed that you were absent from today's training session. Please make sure to attend the next one!";
        }

        // Configure PHPMailer
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server hostname
        $mail->SMTPAuth = true;
        $mail->Username = 'zouhairyoussef881@gmail.com'; // Replace with your SMTP server username
        $mail->Password = 'ascvmnjvkiislkir'; // Replace with your SMTP server password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('zouhairyoussef881@gmail.com', 'zouhair youssef'); // Replace with your from address and name
        $mail->addAddress($to);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

        try {
            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}

mysqli_close($conn);
?>