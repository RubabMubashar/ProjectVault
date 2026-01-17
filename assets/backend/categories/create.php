<?php
require_once __DIR__ . "/../../../config/db.php";



// Allow only POST requests
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../../../categories.php");
    exit;
}

// Get & validate input
$categoryName = trim($_POST["name"] ?? "");

if ($categoryName === "") {
    header("Location: ../../../categories.php");
    exit;
}

// Insert category
$stmt = $conn->prepare("INSERT INTO categories (name) VALUES (?)");
$stmt->bind_param("s", $categoryName);
$stmt->execute();
$stmt->close();

// Redirect back (dashboard or categories page)
$redirect = $_SERVER["HTTP_REFERER"] ?? "../../../categories.php";
header("Location: $redirect");
exit;
