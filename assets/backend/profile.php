<?php
require_once "../../config/db.php";

// Only allow POST requests
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../../setting.php");
    exit;
}

// Get form data safely
$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$profession = trim($_POST["profession"] ?? "");

// Basic validation
if ($name === "" || $email === "" || $profession === "") {
    header("Location: ../../setting.php");
    exit;
}

// Fetch current avatar (to keep if no new upload)
$currentAvatar = null;
$result = $conn->query("SELECT avatar FROM settings WHERE id = 1 LIMIT 1");
if ($result && $row = $result->fetch_assoc()) {
    $currentAvatar = $row["avatar"];
}

// Handle avatar upload
$avatarPath = $currentAvatar;

if (!empty($_FILES["avatar"]["name"])) {
    $uploadDir = "../../assets/img/";

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $fileTmp = $_FILES["avatar"]["tmp_name"];
    $fileName = $_FILES["avatar"]["name"];
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    $allowed = ["jpg", "jpeg", "png", "webp"];

    if (in_array($fileExt, $allowed)) {
        $newFileName = "avatar_" . time() . "." . $fileExt;
        $targetPath = $uploadDir . $newFileName;

        if (move_uploaded_file($fileTmp, $targetPath)) {
            $avatarPath = "assets/img/" . $newFileName;
        }
    }
}

// Update database
$stmt = $conn->prepare(
    "UPDATE settings SET name = ?, email = ?, profession = ?, avatar = ? WHERE id = 1"
);

$stmt->bind_param("ssss", $name, $email, $profession, $avatarPath);
$stmt->execute();
$stmt->close();

// Redirect back to settings page
header("Location: ../../setting.php");
exit;
