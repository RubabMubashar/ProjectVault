<?php
require_once __DIR__ . "/../config/db.php";

$sql = "SELECT * FROM settings WHERE id = 1 LIMIT 1";
$result = $conn->query($sql);

$settings = [
  "name" => "",
  "email" => "",
  "profession" => "",
  "avatar" => "assets/img/user.jpg"
];

if ($result && $result->num_rows > 0) {
  $settings = $result->fetch_assoc();
  if (empty($settings["avatar"])) {
    $settings["avatar"] = "assets/img/user.jpg";
  }
}

$name = htmlspecialchars($settings["name"]);
$email = htmlspecialchars($settings["email"]);
$profession = htmlspecialchars($settings["profession"]);
$avatar = htmlspecialchars($settings["avatar"]);
