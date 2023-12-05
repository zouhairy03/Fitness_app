<?php







//  use PHPMailer\PHPMailer\PHPMailer;
//  use PHPMailer\PHPMailer\Exception;
 
//  require 'Exception.php';
//  require 'PHPMailer.php';
//  require 'SMTP.php';
//  




// // create a new PHPMailer instance
// $mail = new PHPMailer(true);

// try {
//     // configure SMTP settings
//     $mail->isSMTP();
//     $mail->Host = 'smtp.gmail.com';
//     $mail->SMTPAuth = true;
//     $mail->name = 'zouhairyoussef881@gmail.com';
//     $mail->Password = 'ascvmnjvkiislkir
// ';
//     $mail->SMTPSecure = 'tls';
//     $mail->Port = 587;

//     // set sender and recipient details
//     $mail->setFrom('zouhairyoussef881@gmail.com', 'zouhair');
//     $mail->addAddress('youssefsalma881@gmail.com', 'youssef');

//     // set email subject and body
//     $mail->Body= "<br><br>Thank you for registering with us. .<br><br>Best regards,<br>Your Name";

//     $mail->Subject = 'Verification Code';
//     $verification_code = rand(100000, 999999);
//     $mail->Body = "Your verification code is: $verification_code";

//     // send the email
//     $mail->send();

//     echo 'Email sent successfully';
//     header("location: homepage.php");
// } catch (Exception $e) {
//     echo "Email could not be sent. Error: {$mail->ErrorInfo}";
// }









use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require 'vendor/autoload.php';
require 'Exception.php';
 require 'PHPMailer.php';
 require 'SMTP.php';

// create a new PHPMailer instance for user confirmation email
$mail_user = new PHPMailer(true);

// get form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

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
    $mail_user->Body = "Hello $name,\n\nThank you for registering for our fitness club. Your signup was successful go back to the home page your email : $email and the password:$password .\n\nBest regards,\nThe Fitness club team";
    $mail_user->AltBody = "Hello $name,\n\nThank you for registering for our fitness club. Your signup was successful go back to the home page your email : $email and the password:$password .\n\nBest regards,\nThe Fitness club team";

    // send email to user
    $mail_user->send();
    $conn = new mysqli('localhost', 'root', 'root', 'fitness'); // replace with your database details
    $stmt = $conn->prepare("INSERT INTO new_users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);
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
    $mail_admin->Body = "A new user has registered for the fitness club:\n\nName: $name\nEmail: $email\nPassword: $password\nTime: " . date('Y-m-d H:i:s');

    // send email to admin
    $mail_admin->send();
} catch (Exception $e) {
    echo 'An error occurred while sending the email: ' . $mail_admin->ErrorInfo;
}
?>










