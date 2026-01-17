<?php
require_once __DIR__ . "/../../../config/db.php";

$projects = [];

$sql = "
  SELECT 
    projects.id,
    projects.title,
    projects.category_id,
    projects.project_link,
    projects.created_at,
    categories.name AS category_name
  FROM projects
  INNER JOIN categories 
    ON projects.category_id = categories.id
  ORDER BY projects.created_at DESC
";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $projects[] = $row;
  }
}
