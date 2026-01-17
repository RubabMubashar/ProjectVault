<?php
require_once __DIR__ . "/../../../config/db.php";

// Allow only POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../../../projects.php");
    exit;
}

// Get & validate ID
$id = isset($_POST["id"]) ? (int) $_POST["id"] : 0;

if ($id <= 0) {
    header("Location: ../../../projects.php");
    exit;
}

// Delete project
$stmt = $conn->prepare("DELETE FROM projects WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->close();

// Redirect back (projects or dashboard)
$redirect = $_SERVER["HTTP_REFERER"] ?? "../../../projects.php";
header("Location: $redirect");
exit;
