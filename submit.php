<?php
// submit_contact_form.php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']); // Sanitize user input
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Basic validation
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Simulate saving or processing the data (e.g., sending an email, saving to a database)
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Thank You</title>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
            <style>
                body {
                    background-color: #0a2d4d;
                    color: #e9e6e6;
                    font-family: Arial, sans-serif;
                    text-align: center;
                    padding-top: 100px;
                }
                .container {
                    max-width: 600px;
                    margin: auto;
                }
                .btn-home {
                    background-color: #ffeb3b;
                    color: #080808;
                    border: none;
                    font-weight: bold;
                    padding: 10px 20px;
                    border-radius: 5px;
                    text-decoration: none;
                }
                .btn-home:hover {
                    background-color: #ffca28;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <h1>Thank You, $name!</h1>
                <p>Your message has been received. I'll get back to you at <b>$email</b> as soon as possible.</p>
                <p>Here’s what you submitted:</p>
                <p><b>Message:</b> $message</p>
                <a href='contact.html' class='btn-home'>Go Back to Contact Page</a>
            </div>
        </body>
        </html>
        ";
    } else {
        echo "All fields are required. Please go back and fill out the form completely.";
    }
} else {
    // If the form is not submitted properly, redirect back to the contact page
    header("Location: contact.html");
    exit();
}
?>
