<?php
require_once "config.php";

header("Content-Type: application/json");

echo json_encode([
    "status" => false,
    "message" => "PhonePe credentials not configured yet."
]);
?>