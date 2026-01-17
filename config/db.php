<?php
// Database configuration
$host = "localhost";
$user = "root";
$pass = "";          // default XAMPP password is empty
$dbname = "projectvault";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Set charset (important)
$conn->set_charset("utf8mb4");
