<?php
$servername = "localhost";
$username = "root"; // default for XAMPP/WAMP
$password = ""; // default for XAMPP/WAMP
$dbname = "user_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
