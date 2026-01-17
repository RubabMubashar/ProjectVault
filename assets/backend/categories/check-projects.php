<?php
require_once __DIR__ . "/../../../config/db.php";

$categoryId = (int) ($_GET["id"] ?? 0);

if ($categoryId <= 0) {
    echo json_encode(["count" => 0]);
    exit;
}

$stmt = $conn->prepare(
    "SELECT COUNT(*) AS total FROM projects WHERE category_id = ?"
);
$stmt->bind_param("i", $categoryId);
$stmt->execute();

$result = $stmt->get_result()->fetch_assoc();
$stmt->close();

echo json_encode([
    "count" => (int) $result["total"]
]);
