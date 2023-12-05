

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

// create a new PHPMailer instance for user confirmation email
$mail_user = new PHPMailer(true);

// get form data
$username = $_POST['username'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];
$sport = $_POST['sport'];


// configure user confirmation email
try {
    $mail_user->isSMTP();
    $mail_user->Host = 'smtp.gmail.com'; // replace with your SMTP server
    $mail_user->SMTPAuth = true;
    $mail_user->Username = 'zouhairyoussef881@gmail.com'; // replace with your email address
    $mail_user->Password = 'ascvmnjvkiislkir'; // replace with your email password
    $mail_user->SMTPSecure = 'tls';
    $mail_user->Port = 587;
    $mail_user->setFrom('zouhairyoussef881@gmail.com', 'Fitness club');
    $mail_user->addAddress($email);
    $mail_user->Subject = 'Thank you for registering';
    $mail_user->Body = "Hello $username,\n\nThank you for registering for our fitness club on $date at $time. We look forward to seeing you there!\n\nBest regards,\nThe Fitness club team";
    $mail_user->AltBody = "Hello $username,\n\nThank you for registering for our fitness club on $date at $time. We look forward to seeing you there!\n\nBest regards,\nThe Fitness club team";

       


    // send email to user
    $mail_user->send();
    $conn = new mysqli('localhost', 'root', 'root', 'fitness'); // replace with your database details
    $stmt = $conn->prepare("INSERT INTO users (username, email, date, time, sport) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username, $email, $date, $time, $sport);
    $stmt->execute();
    echo 'Thank you for registering! An email confirmation has been sent to ' . $email;
} catch (Exception $e) {
    echo 'An error occurred while sending the email: ' . $mail_user->ErrorInfo;
}

// create a new PHPMailer instance for admin notification email
$mail_admin = new PHPMailer(true);

// configure admin notification email
try {
    $mail_admin->isSMTP();
    $mail_admin->Host = 'smtp.gmail.com'; // replace with your SMTP server
    $mail_admin->SMTPAuth = true;
    $mail_admin->Username = 'zouhairyoussef881@gmail.com'; // replace with your email address
    $mail_admin->Password = 'ascvmnjvkiislkir'; // replace with your email password
    $mail_admin->SMTPSecure = 'tls';
    $mail_admin->Port = 587;
    $mail_admin->setFrom('noreply@fitnessclub.com', 'Fitness club');
    $mail_admin->addAddress('zouhairyoussef881@gmail.com'); // replace with your email address
    $mail_admin->Subject = 'New user registration';
    $mail_admin->Body = "A new user has registered for the fitness club:\n\nUsername: $username\nEmail: $email\nDate: $date\nTime: $time\nSport: $sport";

    // send email to admin
    $mail_admin->send();
} catch (Exception $e) {
    echo 'An error occurred while sending the email: ' . $mail_admin->ErrorInfo;
}
?>
