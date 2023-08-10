<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "ngrifk@gmail.com";
    $subject = "New contact form submission";
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Message:\n$message\n";

    $headers = "From: $email";

    if (mail($to, $subject, $email_message, $headers)) {
        // Email sent successfully
        echo "success";
    } else {
        // Error sending email
        echo "error";
    }
}
?>
