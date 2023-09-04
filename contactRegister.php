<?php
// Assuming you have a MySQL database set up with a table called 'messages'
include "connection.php";

// Get the form values
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Check if email already exists in the database
$emailExistsQuery = "SELECT COUNT(*) as count FROM contact WHERE email = '$email'";
$emailExistsResult = $conn->query($emailExistsQuery);
$emailExistsRow = $emailExistsResult->fetch_assoc();

if ($emailExistsRow['count'] > 0) {
    echo '<script>alert("You are not allowed to add duplicate data. Email already exists."); window.location.href = "contact.html";</script>';
    exit;
}

// Insert the form values into the database
$sql = "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    // Close the database connection
    $conn->close();

    // Redirect to success page using JavaScript
    echo '<script>window.location.href = "successcontact.php";</script>';
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    exit;
}
?>
