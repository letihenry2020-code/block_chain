<?php
$conn = new mysqli("localhost", "root", "", "network_security");
if ($conn->connect_error){
     die("Connection failed: " . $conn->connect_error);
}
$row = ("SELECT * FROM alert");
$result = $conn->query("$row");
?>