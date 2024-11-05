<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $inviter_name = $_POST['inviter_name'];

    // Validate form data
    if (empty($name) || empty($email) || empty($inviter_name)) {
        echo "All fields are required.";
        exit;
    }

    // Prepare the email
    $to = "youremail@example.com";  // Replace with the email address where you want to receive RSVPs
    $subject = "RSVP from $name";
    $message = "Name: $name\nEmail: $email\nInviter Name: $inviter_name";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your RSVP!";
    } else {
        echo "There was a problem sending your RSVP. Please try again.";
    }
}
?>
