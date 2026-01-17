<?php
require_once __DIR__ . "/../../../config/db.php";

// Allow only POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../../../projects.php");
    exit;
}

// Get & validate inputs
$title       = trim($_POST["title"] ?? "");
$category_id = (int) ($_POST["category_id"] ?? 0);
$link        = trim($_POST["project_link"] ?? "");

if ($title === "" || $category_id <= 0 || $link === "") {
    header("Location: ../../../projects.php");
    exit;
}

// Insert project
$stmt = $conn->prepare(
    "INSERT INTO projects (title, category_id, project_link) VALUES (?, ?, ?)"
);
$stmt->bind_param("sis", $title, $category_id, $link);
$stmt->execute();
$stmt->close();

// Redirect back (projects or dashboard)
$redirect = $_SERVER["HTTP_REFERER"] ?? "../../../projects.php";
header("Location: $redirect");
exit;
