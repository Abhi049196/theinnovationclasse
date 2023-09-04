<?php
//Database credentials
$servername = "localhost:3306";  // Change this if your MySQL server is running on a different host
$username = "heinnova_theinnovationclasses";  // Change this if you have a different username
$password = "theinnovation";  // Change this if you have set a password for your MySQL server
$dbname = "heinnova_admission";  // Change this to your actual database name

// Create a new database connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> 


