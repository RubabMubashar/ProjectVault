<?php
require_once __DIR__ . "/../../../config/db.php";

// Total projects
$projectsResult = $conn->query("SELECT COUNT(*) AS total FROM projects");
$totalProjects = ($projectsResult) 
    ? (int) $projectsResult->fetch_assoc()['total'] 
    : 0;

// Total categories
$categoriesResult = $conn->query("SELECT COUNT(*) AS total FROM categories");
$totalCategories = ($categoriesResult) 
    ? (int) $categoriesResult->fetch_assoc()['total'] 
    : 0;
