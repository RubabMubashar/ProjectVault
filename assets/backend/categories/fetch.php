<?php
require_once __DIR__ . "/../../../config/db.php";

$categories = [];

// Fetch categories
$sql = "SELECT id, name, created_at FROM categories ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $categories[] = $row;
    }
}

// Helper flag for UI
$hasCategories = (count($categories) > 0);
