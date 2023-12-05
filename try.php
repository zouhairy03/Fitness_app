<?php
// Check if the form has been submitted
if (isset($_POST['view_options'])) {

    // Check if the product_name and product_price keys are set in the $_POST array
    if (isset($_POST['product_name']) && isset($_POST['product_price'])) {
    
        // Get the form data
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];

        // Set the email recipient
        $to = "zouhairyoussef881@gmail.com";

        // Set the email subject
        $subject = "New product view options";

        // Set the email message
        $message = "Product Name: " . $product_name . "\n";
        $message .= "Product Price: " . $product_price . "\n";

        // Send the email
        if (mail($to, $subject, $message)) {
            echo "Thank you for your interest. We have received your request.";
        } else {
            echo "There was an error sending your message. Please try again later.";
        }
    } else {
        echo "The form data is not complete. Please try again later.";
    }
}
?>
