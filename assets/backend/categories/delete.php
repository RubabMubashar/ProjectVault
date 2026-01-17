<?php
require_once "../../../config/db.php";

// Allow only POST requests
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../../../categories.php");
    exit;
}

// Get category ID
$id = isset($_POST["id"]) ? (int) $_POST["id"] : 0;

if ($id <= 0) {
    header("Location: ../../../categories.php");
    exit;
}

// Delete category
$stmt = $conn->prepare("DELETE FROM categories WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->close();

// Redirect back to previous page (categories or dashboard)
$redirect = $_SERVER["HTTP_REFERER"] ?? "../../../categories.php";
header("Location: $redirect");
exit;
