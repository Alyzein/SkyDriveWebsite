<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    // ... collect other form fields

    $to = 'azein001@gmail.com';
    $subject = 'New Form Submission';
    $message = "First Name: $firstName\nLast Name: $lastName\n";
    // ... add other form fields to message

    // Use mail() function to send email
    if(mail($to, $subject, $message)) {
        echo "Email sent successfully";
    } else {
        echo "Email sending failed";
    }
}
?>