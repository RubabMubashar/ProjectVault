<?php
require_once __DIR__ . "/../../../config/db.php";

// Allow only POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../../../projects.php");
    exit;
}

// Get & validate inputs
$id          = (int) ($_POST["id"] ?? 0);
$title       = trim($_POST["title"] ?? "");
$category_id = (int) ($_POST["category_id"] ?? 0);
$link        = trim($_POST["project_link"] ?? "");

if ($id <= 0 || $title === "" || $category_id <= 0 || $link === "") {
    header("Location: ../../../projects.php");
    exit;
}

// Update project
$stmt = $conn->prepare(
    "UPDATE projects 
     SET title = ?, category_id = ?, project_link = ?
     WHERE id = ?"
);
$stmt->bind_param("sisi", $title, $category_id, $link, $id);
$stmt->execute();
$stmt->close();

// Redirect back (projects or dashboard)
$redirect = $_SERVER["HTTP_REFERER"] ?? "../../../projects.php";
header("Location: $redirect");
exit;
