<?php
$conn = new mysqli("localhost", "root", "", "network_security");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$distance = floatval($_GET['distance_cm']);
$created_at = intval($_GET['created_at']);

$conn->query("INSERT INTO alert (distance_cm, created_at) VALUES ('$distance_cm', '$created_at')");
$result = $conn->query("SELECT * FROM alert");
?>